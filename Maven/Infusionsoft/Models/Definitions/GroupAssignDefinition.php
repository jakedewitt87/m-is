<?php
namespace Maven\Infusionsoft\Models\Definitions;

class GroupAssignDefinition extends BaseDefinition
{

    public static $table = 'GroupAssign';
    public static $fields = array (
        'Id'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'UserId'  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'GroupId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Admin'   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
    );

}

