<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductInterestDefinition extends BaseDefinition {

    public static $table = 'ProductInterest';
    public static $fields = [
        'Id'              => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ObjectId'        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ObjType'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],

        ],
        'ProductId'       => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ProductType'     => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],

        ],
        'Qty'             => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'DiscountPercent' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
    ];

}

