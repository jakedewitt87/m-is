<?php
namespace Maven\Infusionsoft\Models\Definitions;

class OrderItemDefinition extends BaseDefinition
{

    public static $table = 'OrderItem';
    public static $fields = array (
        'Id'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'OrderId'            => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ProductId'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'SubscriptionPlanId' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ItemName'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Qty'                => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'CPU'                => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'PPU'                => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'ItemDescription'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ItemType'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Notes'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LastUpdated'        => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

