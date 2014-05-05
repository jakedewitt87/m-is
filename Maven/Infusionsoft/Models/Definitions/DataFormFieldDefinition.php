<?php
namespace Maven\Infusionsoft\Models\Definitions;

class DataFormFieldDefinition extends BaseDefinition
{

    public static $table = 'DataFormField';
    public static $fields = array (
        'Id'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'DataType'     => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'FormId'       => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'GroupId'      => array (
            'access' => array ('Edit', 'Read'),
            'type'   => 'Integer'
        ),
        'Name'         => array (
            'access' => array ('Edit', 'Read'),
            'type'   => 'String'
        ),
        'Label'        => array (
            'access' => array ('Edit', 'Read'),
            'type'   => 'String'
        ),
        'DefaultValue' => array (
            'access' => array ('Edit', 'Read'),
            'type'   => 'String'
        ),
        'Values'       => array (
            'access' => array ('Edit', 'Read'),
            'type'   => 'String'
        ),
        'ListRows'     => array (
            'access' => array ('Edit', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

