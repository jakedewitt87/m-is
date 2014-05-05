<?php
namespace Maven\Infusionsoft\Models\Definitions;

class DataFormTabDefinition extends BaseDefinition
{

    public static $table = 'DataFormTab';
    public static $fields = array (
        'Id'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'FormId'  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'TabName' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

