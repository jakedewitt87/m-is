<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductInterestBundleDefinition extends BaseDefinition
{

    public static $table = 'ProductInterestBundle';
    public static $fields = array (
        'Id'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'BundleName'  => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Description' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

