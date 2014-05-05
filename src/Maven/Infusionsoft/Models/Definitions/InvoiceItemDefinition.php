<?php
namespace Maven\Infusionsoft\Models\Definitions;

class InvoiceItemDefinition extends BaseDefinition
{

    public static $table = 'InvoiceItem';
    public static $fields = array (
        'Id'               => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'InvoiceId'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'OrderItemId'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'InvoiceAmt'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'Discount'         => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'DateCreated'      => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'Description'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CommissionStatus' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'LastUpdated'      => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

