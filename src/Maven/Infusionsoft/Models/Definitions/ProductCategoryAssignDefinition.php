<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductCategoryAssignDefinition extends BaseDefinition
{

    public static $table = 'ProductCategoryAssign';
    public static $fields = [
        'Id'                => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ProductId'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ProductCategoryId' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
    ];

}

