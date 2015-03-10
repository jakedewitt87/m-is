<?php namespace Maven\Infusionsoft\Services;

use Maven\Infusionsoft\Definitions\TablesDefinition;
use Maven\Infusionsoft\Models\BaseModel;

class TableService extends BaseService {

    /**
     * Get all tables and their fields including custom fields
     *
     * @return array
     */
    public function getAllTablesWithCustomFields()
    {
        $fullTables = $this->getAllTablesWithFields();
        $customFields = $this->SDK->dsQuery('DataFormField', 1000, 0, ['Id' => '%'], $this->getTableFields('DataFormField', 'Read'));
        foreach ( $customFields as $customField )
        {
            $formName = $this->getTableNameByFormId($customField['FormId']);
            if ( $formName )
            {
                $fullTables[$formName][] = '_' . $customField['Name'];
            }
        }

        return $fullTables;
    }

    public function getAllTableFields($tableName, $accessType = 'Add')
    {
        $tableFields = $this->getTableFields($tableName, $accessType);
        $customFields = $this->getTableCustomFields($tableName);

        return array_merge($tableFields, $customFields);
    }

    public function getTableCustomFields($tableName)
    {
        $tableFormId = $this->getFormIdByTableName($tableName);
        if ( ! $tableFormId )
        {
            return [];
        } // This table does not have custom fields.
        $customFields = $this->SDK->dsQuery('DataFormField', 1000, 0, ['FormId' => $tableFormId], $this->getTableFields('DataFormField', 'Read'));
        $fieldsArray = [];
        foreach ( $customFields as $customField )
        {
            $fieldsArray[] = '_' . $customField['Name'];
        }

        return $fieldsArray;
    }


    public function getTableCustomFieldsWithDefinition($tableName)
    {
        $tableFormId = $this->getFormIdByTableName($tableName);
        if ( ! $tableFormId ) return []; // This table does not have custom fields.
        $customFields = $this->SDK->dsQueryOrderBy('DataFormField', 1000, 0, ['FormId' => $tableFormId], $this->getTableFields('DataFormField', 'Read'), 'Label');
        $fieldsArray = [];
        foreach ( $customFields as $customField )
        {
            $fieldsArray['_' . $customField['Name']] = [
                'Id'       => $customField['Id'],
                'Name'     => $customField['Name'],
                'FormId'   => $customField['FormId'],
                'DataType' => $customField['DataType'],
                'Label'    => isset($customField['Label']) ? $customField['Label'] : $customField['Name']
            ];
        }

        return $fieldsArray;
    }


    public function getAllTableFieldsByGroup($tableName)
    {
        $defaultFields = $this->getTableFieldsWithDefinition($tableName, 'Add');
        $customFields = $this->getTableCustomFieldsWithDefinition($tableName);

        $fields = [];
        foreach ( $defaultFields as $fieldName => $fieldDefinition )
        {
            if ( isset($fieldDefinition['Label']) )
            {
                $fields['General'][$fieldName] = $fieldDefinition['Label'];
            }
            else
            {
                $fields['General'][$fieldName] = $fieldName;
            }
        }

        foreach ( $customFields as $fieldName => $fieldDefinition )
        {
            if ( isset($fieldDefinition['Label']) )
            {
                $fields['Custom Fields'][$fieldName] = $fieldDefinition['Label'];
            }
            else
            {
                $fields['Custom Fields'][$fieldName] = $fieldName;
            }
        }


        return $fields;

    }


    /**
     * Get all tables and all standard Readable fields for each
     *
     * @return array
     */
    public function getAllTablesWithFields()
    {
        $fullTables = array();
        foreach ( $this->getAllTables() as $table )
        {
            $tableFields = $this->getTableFields($table['name']);
            $fullTables[$table['name']] = $tableFields;
        }

        return $fullTables;
    }

    /**
     * Get an array of all tables, from the tables definition file
     *
     * @return array
     */
    public function getAllTables()
    {
        $definition = new TablesDefinition();

        return $definition::$tables;
    }

    /**
     * Get an instance of the Model for this table
     *
     * @param string $tableName
     *
     * @return BaseModel|null
     */
    public function getTableModel($tableName)
    {
        $className = 'Maven\Infusionsoft\Models\\' . $tableName; // Determine name of desired class
        if ( ! class_exists($className) ) return null; // Unable to find model for this table
        /** @var BaseModel $infModel */
        $infModel = new $className($this->SDK); // Load instance of this Infusionsoft model
        return $infModel;
    }

    /**
     * Get all fields for a table, by access type
     *
     * @param string $tableName
     * @param string $accessType Defaults to Read
     *
     * @return array
     */
    public function getTableFields($tableName, $accessType = 'Read')
    {
        $model = $this->getTableModel($tableName);
        if ( ! $model ) return [];
        $tableFields = $model->getFieldsWithAccess($accessType); // Get fields on the table
        return $tableFields;
    }

    public function getTableFieldsWithDefinition($tableName, $accessType = 'Read')
    {
        $model = $this->getTableModel($tableName);
        if ( ! $model ) return [];
        $tableFields = $model->getFieldsWithAccess($accessType, true); // Get fields on the table
        return $tableFields;
    }

    /**
     * Determine which table corresponds with a given DataFormField::FormId
     *
     * @param $formId
     *
     * @return bool|string
     */
    public function getTableNameByFormId($formId)
    {
        switch ( $formId )
        {
            case - 1:
                return 'Contact';
            case - 3:
                return 'Affiliate';
            case - 4:
                return 'Lead';
            case - 5:
                return 'ContactAction';
            case - 6:
                return 'Company';
            case - 9:
                return 'Job';
            default:
                return false;
        }
    }

    /**
     * Determine which custom field FormID corresponds with this table, or false if the table does not have custom fields
     *
     * @param $tableName
     *
     * @return bool|int
     */
    public function getFormIdByTableName($tableName)
    {
        switch ( $tableName )
        {
            case 'Contact':
                return - 1;
            case 'Affiliate':
                return - 3;
            case 'Lead':
                return - 4;
            case 'ContactAction':
                return - 5;
            case 'Company':
                return - 6;
            case 'Job':
                return - 9;
            default:
                return false;
        }
    }
}