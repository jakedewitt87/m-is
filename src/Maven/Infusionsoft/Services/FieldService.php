<?php
namespace Maven\Infusionsoft\Services;

class FieldService extends BaseService {

    /**
     * Updates Dates and DateTimes received by Infusionsoft, to be stored in MySQL
     *
     * @param array $results Array of results from Infusionsoft
     *
     * @return array The same array with any matching fields adjusted
     */
    public function cleanFieldValues($results)
    {
        $dateTimeFields = ['LastUpdated', 'DateCreated'];
        $dateFields = ['Anniversary', 'Birthday'];
        foreach ( $results as $resultId => $result ) // Loop through all results
        {
            foreach ( $result as $fieldName => $fieldValue ) // Loop through all fields on this result
            {
                foreach ( $dateTimeFields as $dtField ) // Replace all standard DateTime fields
                {
                    if ( $dtField == $fieldName && $fieldValue )
                    {
                        $results[$resultId][$dtField] = date('Y-m-d H:i:s', strtotime($result[$dtField]));
                    }
                }
                foreach ( $dateFields as $dtField ) // Replace all standard Date Fields
                {
                    if ( $dtField == $fieldName && $fieldValue )
                    {
                        $results[$resultId][$dtField] = date('Y-m-d', strtotime($result[$dtField]));
                    }
                }

                if ( $this->valueIsDate($fieldValue) )
                {
                    $results[$resultId][$fieldName] = date('Y-m-d', strtotime($result[$fieldName]));
                }
                if ( $this->valueIsDateTime($fieldValue) )
                {
                    $results[$resultId][$fieldName] = date('Y-m-d H:i:s', strtotime($result[$fieldName]));
                }
            }
        }

        return $results;
    }

    protected function valueIsDate($value)
    {
        if ( ! $this->valueIsDateTime($value) )
        {
            return false;
        }

        return substr($value, 9) == '00:00:00';
    }

    protected function valueIsDateTime($value)
    {
        // Checking for: 00000000T00:00:00.  Returns true if it is a DateTime.
        return (strlen($value) === 17 && substr($value, 8, 1) === 'T' && substr($value, 11, 1) === ':' && substr($value, 14, 1) === ':');
    }
}