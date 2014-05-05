<?php
namespace Maven\Infusionsoft\Models\Definitions;

class DataFormGroupDefinition extends BaseDefinition
{

    public static $table = 'DataFormGroup';
    public static $fields = array (
        'Id'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'TabId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Name'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

