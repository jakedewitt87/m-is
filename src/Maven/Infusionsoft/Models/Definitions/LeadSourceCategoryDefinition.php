<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceCategoryDefinition extends BaseDefinition {

    public static $table = 'LeadSourceCategory';
    public static $fields = [
        'Id'          => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'Name'        => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'Description' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
    ];

}

