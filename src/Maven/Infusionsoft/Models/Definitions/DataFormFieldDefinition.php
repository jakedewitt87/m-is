<?php
namespace Maven\Infusionsoft\Models\Definitions;

class DataFormFieldDefinition extends BaseDefinition {

    public static $table = 'DataFormField';
    public static $fields = [
        'Id'           => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'DataType'     => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index']

        ],
        'FormId'       => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'GroupId'      => [
            'access'  => ['Edit', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Name'         => [
            'access'  => ['Edit', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'Label'        => [
            'access'  => ['Edit', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'DefaultValue' => [
            'access'  => ['Edit', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'Values'       => [
            'access'  => ['Edit', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'ListRows'     => [
            'access' => ['Edit', 'Read'],
            'type'   => 'Integer'
        ],
    ];

}

