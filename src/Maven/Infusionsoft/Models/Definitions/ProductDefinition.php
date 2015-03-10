<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductDefinition extends BaseDefinition {

    public static $table = 'Product';
    public static $fields = [
        'Id'                   => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ProductName'          => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ProductPrice'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'Sku'                  => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'ShortDescription'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'Taxable'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'CountryTaxable'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'StateTaxable'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'CityTaxable'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'Weight'               => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'IsPackage'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'NeedsDigitalDelivery' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'Description'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'HideInStore'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'Status'               => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'TinyInteger',
            'options' => ['index']

        ],
        'TopHTML'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'BottomHTML'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'ShippingTime'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String'
        ],
        'LargeImage'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Binary'
        ],
        'InventoryNotifiee'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String'
        ],
        'InventoryLimit'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'Shippable'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
    ];

}

