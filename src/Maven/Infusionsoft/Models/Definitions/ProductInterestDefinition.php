<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductInterestDefinition extends BaseDefinition
{

    public static $table = 'ProductInterest';
    public static $fields = array (
        'Id'              => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ObjectId'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ObjType'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ProductId'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ProductType'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Qty'             => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'DiscountPercent' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

