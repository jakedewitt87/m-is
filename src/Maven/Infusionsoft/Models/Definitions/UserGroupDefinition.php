<?php
namespace Maven\Infusionsoft\Models\Definitions;

class UserGroupDefinition extends BaseDefinition
{

    public static $table = 'UserGroup';
    public static $fields = array (
        'Id'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Name'    => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'OwnerId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
    );

}

