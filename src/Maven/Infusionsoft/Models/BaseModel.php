<?php
namespace Maven\Infusionsoft\Models;

use Exception;
use Maven\Infusionsoft\Services\TableService;

abstract class BaseModel {

    public static $table;
    public static $fieldMap = [];
    public static $fields = [];
    public $SDK;

    public function __construct(\iSDK $sdk)
    {
        $this->SDK = $sdk;
    }

    /**
     * @param $id
     *
     * @return mixed
     * @throws Exception
     */
    public function find($id)
    {
        $response = $this->SDK->dsQuery($this::$table, 1, 0, ['Id' => $id], $this->getReadFields());
        if (! is_array($response))
        {
            throw new Exception('Unexpected response when attempting to locate model: ' . $response, 400);
        }

        return $response ? $response[0] : [];
    }

    /**
     * @param array  $query
     * @param string $orderBy
     *
     * @return array
     * @throws \Exception
     */
    public function findLast($query, $orderBy = 'Id')
    {
        $response = $this->SDK->dsQueryOrderBy($this::$table, 1, 0, $query, $this->getReadFields(), $orderBy, false);

        if (! is_array($response))
        {
            throw new Exception('Unexpected response when attempting to locate model: ' . $response, 400);
        }

        return $response ? $response[0] : [];

    }

    /**
     * @param $id
     *
     * @return array
     * @throws Exception
     */
    public function findWithCustom($id)
    {
        $response = $this->SDK->dsLoad($this::$table, $id, array_merge($this->getReadFields(), $this->getCustomFields()));
        if (! is_array($response)) throw new Exception('Unexpected response when loading this object');

        return $response;
    }

    /**
     * Returns all the results of a query, all pages
     *
     * @param array $query
     * @param null  $table
     * @param array $returnFields
     *
     * @return array
     * @throws Exception
     */
    public function get(array $query, $table = null, $returnFields = [])
    {
        $page = 0;
        $data = [];
        $table = $table ? : $this::$table;
        $returnFields = $returnFields ? : $this->getReadFields();
        do
        {
            $response = $this->SDK->dsQuery($table, 1000, $page ++, $query, $returnFields);
            if (! is_array($response)) throw new Exception('Error: ' . $response);
            $data = array_merge($data, $response);
        } while (sizeof($response) == 1000);

        return $data;
    }


    /**
     * Just like the get method except you can sort / order it by
     * a field of choice
     *
     * @param array  $query
     * @param string $orderBy
     * @param bool   $ascending
     * @param null   $table
     * @param array  $returnFields
     *
     * @return array
     * @throws Exception
     */
    public function getOrderBy(array $query, $orderBy = 'Id', $ascending = true, $table = null, $returnFields = [])
    {
        $page = 0;
        $data = [];
        $table = $table ? : $this::$table;
        $returnFields = $returnFields ? : $this->getReadFields();
        do
        {
            $response = $this->SDK->dsQueryOrderBy($table, 1000, $page ++, $query, $returnFields, $orderBy, $ascending);
            if (! is_array($response)) throw new Exception('Error: ' . $response);
            $data = array_merge($data, $response);
        } while (sizeof($response) == 1000);

        return $data;
    }

    public function getFirstBy(array $query, $orderBy, $ascending = true, $table = null, $returnFields = [])
    {
        $table = $table ? : $this::$table;
        $returnFields = $returnFields ? : $this->getReadFields();
        $response = $this->SDK->dsQueryOrderBy($table, 1, 0, $query, $returnFields, $orderBy, $ascending);
        if (!is_array($response)) throw new \Exception('Error: ' . $response);

        return isset($response[0]) ? $response[0] : [];
    }

    /**
     * Returns all the results of a query, all pages with custom fields
     *
     * @param array  $query
     * @param string $orderBy
     * @param bool   $asc
     *
     * @throws Exception
     * @return array
     */
    public function getWithCustom(array $query, $orderBy = 'Id', $asc = true)
    {
        $fields = array_merge($this->getReadFields(), $this->getCustomFields());
        $sort = in_array($orderBy, $fields) ? : false;
        $page = 0;
        $data = [];
        $fields = array_merge($this->getReadFields(), $this->getCustomFields());
        do
        {
            $response = $sort ?
                $this->SDK->dsQueryOrderBy($this::$table, 1000, $page ++, $query, $fields, $orderBy, $asc) :
                $this->SDK->dsQuery($this::$table, 1000, $page ++, $query, $fields);
            if (! is_array($response)) throw new Exception('Error: ' . $response);
            $data = array_merge($data, $response);
        } while (sizeof($response) == 1000);

        return $data;
    }

    /**
     * @param int   $id
     * @param array $updateData
     *
     * @return int
     * @throws Exception
     */
    public function update($id, $updateData)
    {
        $updateData = $this->getFilteredArray($updateData, $this->getEditFields());
        $response = $this->SDK->dsUpdate($this::$table, $id, $updateData);
        if (! is_numeric($response)) throw new Exception('Unexpected response when attempting to update model: ' . $response, 400);

        return $response;
    }

    /**
     * @param $inputArray
     *
     * @return mixed
     */
    public function getInfusionsoftArray($inputArray)
    {
        return $this->filterArrayKeys($this::$fieldMap, $inputArray);
    }

    /**
     * @return array
     */
    public function getAddFields()
    {
        return $this->getFieldsWithAccess('Add');
    }

    /**
     * @return array
     */
    public function getEditFields()
    {
        return $this->getFieldsWithAccess('Edit');
    }

    /**
     * @return array
     */
    public function getReadFields()
    {
        return $this->getFieldsWithAccess('Read');
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        $TableService = new TableService($this->SDK);

        return $TableService->getTableCustomFields($this::$table);
    }

    /**
     * @param      $accessType
     * @param bool $withDefinition
     *
     * @return array
     */
    public function getFieldsWithAccess($accessType, $withDefinition = false)
    {
        $returnFields = array();
        $tableDefinition = $this->getDefinition();
        foreach ($tableDefinition::$fields as $fieldName => $fieldDetails)
        {
            if (is_array($fieldDetails['access']) && in_array($accessType, $fieldDetails['access']))
            {
                if ($withDefinition)
                {
                    $returnFields[$fieldName] = $fieldDetails;
                }
                else
                {
                    $returnFields[] = $fieldName;
                }
            }
        }

        return $returnFields;
    }

    /**
     * @return mixed
     */
    protected function getDefinition()
    {
        $className = 'Maven\Infusionsoft\Models\Definitions\\' . $this::$table . 'Definition';

        return new $className();
    }

    /**
     * @param $fieldName
     *
     * @return array
     */
    public function getLaravelFieldType($fieldName)
    {
        $tableDefinition = $this->getDefinition();
        $fieldList = $tableDefinition::$fields;
        if (! array_key_exists($fieldName, $fieldList))
        {
            return array('string', 150, 'mods' => ['nullable']);
        } // If
        $return = array();
        $fieldOptions = array_key_exists('options', $fieldList[$fieldName]) ? $fieldList[$fieldName]['options'] : array();
        switch ($fieldList[$fieldName]['type'])
        {
            case 'Integer':
                $return[0] = array_key_exists('type', $fieldOptions) ? $fieldOptions['type'] : 'integer';
                break;
            case 'String':
                $return[0] = array_key_exists('type', $fieldOptions) ? $fieldOptions['type'] : 'string';
                if ($return[0] == 'string') $return[1] = array_key_exists('length', $fieldOptions) ? $fieldOptions['length'] : 150;
                break;
            case 'Date':
                $return[0] = array_key_exists('type', $fieldOptions) ? $fieldOptions['type'] : 'date';
                break;
            case 'DateTime':
                $return[0] = array_key_exists('type', $fieldOptions) ? $fieldOptions['type'] : 'dateTime';
                break;
            default:
                $return[0] = array_key_exists('type', $fieldOptions) ? $fieldOptions['type'] : 'string';
                if ($return[0] == 'string') $return[1] = array_key_exists('length', $fieldOptions) ? $fieldOptions['length'] : 150;
                break;
        }
        foreach (['primary', 'unsigned', 'index', 'unique', 'nullable', 'default'] as $modName)
        {
            if (in_array($modName, $fieldOptions)) $return['mods'][$modName] = $modName;
            if (array_key_exists($modName, $fieldOptions)) $return['mods'][$modName] = [$modName => $fieldOptions[$modName]];
        }
        if ($fieldName !== 'Id') $return['mods']['nullable'] = 'nullable'; // Force all fields besides Id to allow null
        return $return;
    }

    /**
     * @param int $fieldTypeId
     *
     * @return array
     */
    public function getLaravelCustomFieldType($fieldTypeId)
    {
        $return = ['string']; // Default field type
        $strings = [
            1  => 20, // Phone
            2  => 20, // SSN
            5  => 40, // State
            7  => 10, // Year
            8  => 15, // Month
            9  => 15, // Day of Week
            10 => 50, // Name
            15 => 150, // Text
            17 => 70, // List Box
            18 => 60, // Website
            19 => 80, // Email
            20 => 60, // Radio
            21 => 70, // Dropdown
            22 => 30, // User
            23 => 70, // Drilldown
        ];
        $doubles = [3, 4, 6, 11]; // Currency, Percent, Yes/No, Decimal Number
        if (array_key_exists($fieldTypeId, $strings))
        {
            $return[0] = 'string';
            $return[1] = $strings[$fieldTypeId]; // Set the max length as defined above for this sring
        }
        if (array_key_exists($fieldTypeId, $doubles)) $return[0] = 'double'; // Check for all double types
        if ($fieldTypeId == 12) $return[0] = 'integer'; // Whole Number
        if ($fieldTypeId == 13) $return[0] = 'date'; // Date
        if ($fieldTypeId == 14) $return[0] = 'dateTime'; // Date/Time
        if ($fieldTypeId == 16) $return[0] = 'text'; // Text Area
        $return['mods'] = ['nullable' => 'nullable']; // All custom fields are nullable by default
        return $return;
    }

    /**
     * Given a fieldMap array which contains keys of new names, and values of possible inputs - it will return a filtered version of the second array
     *
     * @param $fieldMap Array containing keys of your desired array, and values of the possible names to look for
     * @param $inputArray
     *
     * @return mixed
     */
    public function filterArrayKeys($fieldMap, $inputArray)
    {
        $ifsArray = [];
        foreach ($fieldMap as $ifsField => $localField)
        {
            if (is_array($localField))
            {
                foreach ($localField as $localFieldName)
                {
                    if (isset($inputArray[$localFieldName]))
                    {
                        $ifsArray[$ifsField] = $inputArray[$localFieldName];
                    }
                    else
                    {
                        $ifsArray[$ifsField] = isset($ifsArray[$ifsField]) ? $ifsArray[$ifsField] : null;
                    }
                }
            }
            else
            {
                if (isset($inputArray[$localField]))
                {
                    $ifsArray[$ifsField] = $inputArray[$localField];
                }
                else
                {
                    $ifsArray[$ifsField] = isset($ifsArray[$ifsField]) ? $ifsArray[$ifsField] : null;
                }
            }
        }

        return $this->removeNullValues($ifsArray);
    }

    /**
     * Remove any null values from the array and returns it
     *
     * @param $array
     *
     * @return mixed
     */
    protected function removeNullValues($array)
    {
        foreach ($array as $field => $value) if ($value === null) unset($array[$field]);

        return $array;
    }

    /**
     * Get an array containing only the objects which exist in the second array
     *
     * @param $originalArray Array of data
     * @param $filterArray   Array of allowed keys
     *
     * @return array A filtered array
     */
    protected function getFilteredArray($originalArray, $filterArray)
    {
        $returnArray = array();
        foreach ($originalArray as $key => $value)
        {
            if (strpos($key, '_') === 0)
            {
                $returnArray[$key] = $value;
                continue;
            }
            if (in_array($key, $filterArray)) $returnArray[$key] = $value;
        }

        return $returnArray;
    }

    public function getIdArray($array)
    {
        $returnArray = [];
        foreach ($array as $value)
        {
            if (! empty($value['Id'])) $returnArray[$value['Id']] = $value;
        }

        return $returnArray;
    }
}