<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductCategoryDefinition extends BaseDefinition
{

    public static $table = 'ProductCategory';
    public static $fields = [
        'Id'                  => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'CategoryDisplayName' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'CategoryImage'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Binary'
        ],
        'CategoryOrder'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'ParentId'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
    ];

}

