<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductInterestBundleDefinition extends BaseDefinition {

    public static $table = 'ProductInterestBundle';
    public static $fields = [
        'Id'          => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'BundleName'  => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'Description' => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
    ];

}

