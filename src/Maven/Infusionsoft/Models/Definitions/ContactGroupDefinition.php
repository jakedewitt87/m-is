<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactGroupDefinition extends BaseDefinition
{

    public static $table = 'ContactGroup';
    public static $fields = [
        'Id'               => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'GroupName'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],
        ],
        'GroupCategoryId'  => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'GroupDescription' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
    ];

}

