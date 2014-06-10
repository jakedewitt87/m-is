<?php
namespace Maven\Infusionsoft\Models;

class DataFormField extends BaseModel
{

    public static $table = 'DataFormField';


    public function getListOfDefaultValues($fieldId)
    {
        $field = $this->find($fieldId);
        $values = explode("\n", trim($field['Values'], "\n"));

        return array_combine($values, $values);
    }

}

