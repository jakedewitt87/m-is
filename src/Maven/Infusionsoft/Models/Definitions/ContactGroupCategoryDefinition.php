<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactGroupCategoryDefinition extends BaseDefinition {

    public static $table = 'ContactGroupCategory';
    public static $fields = [
        'Id'                  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'CategoryName'        => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],
        ],
        'CategoryDescription' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
    ];

}

