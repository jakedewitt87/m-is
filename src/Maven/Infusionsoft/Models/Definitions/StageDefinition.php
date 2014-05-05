<?php
namespace Maven\Infusionsoft\Models\Definitions;

class StageDefinition extends BaseDefinition
{

    public static $table = 'Stage';
    public static $fields = array (
        'Id'            => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'StageName'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StageOrder'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'TargetNumDays' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
    );

}

