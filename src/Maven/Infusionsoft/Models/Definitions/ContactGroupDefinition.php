<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactGroupDefinition extends BaseDefinition
{

    public static $table = 'ContactGroup';
    public static $fields = array (
        'Id'               => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'GroupName'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'GroupCategoryId'  => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'GroupDescription' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

