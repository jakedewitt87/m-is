<?php
namespace Maven\Infusionsoft\Models\Definitions;

class SavedFilterDefinition extends BaseDefinition
{

    public static $table = 'SavedFilter';
    public static $fields = array (
        'Id'               => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'FilterName'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ReportStoredName' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'UserId'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
    );

}

