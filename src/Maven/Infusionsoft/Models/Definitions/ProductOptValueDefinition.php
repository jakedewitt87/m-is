<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductOptValueDefinition extends BaseDefinition {

    public static $table = 'ProductOptValue';
    public static $fields = [
        'Id'              => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'ProductOptionId' => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Label'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'Sku'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'IsDefault'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'TinyInteger'

        ],
        'Name'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'OptionIndex'     => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index']

        ],
        'PriceAdjustment' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
    ];

}

