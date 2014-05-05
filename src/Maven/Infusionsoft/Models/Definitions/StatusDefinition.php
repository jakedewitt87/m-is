<?php
namespace Maven\Infusionsoft\Models\Definitions;

class StatusDefinition extends BaseDefinition
{

    public static $table = 'Status';
    public static $fields = array (
        'Id'            => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'StatusName'    => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StatusOrder'   => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'TargetNumDays' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

