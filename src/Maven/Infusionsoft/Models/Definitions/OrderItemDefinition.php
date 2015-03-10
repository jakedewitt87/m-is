<?php
namespace Maven\Infusionsoft\Models\Definitions;

class OrderItemDefinition extends BaseDefinition
{

    public static $table = 'OrderItem';
    public static $fields = [
        'Id'                 => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'OrderId'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ProductId'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'SubscriptionPlanId' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ItemName'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'Qty'                => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'CPU'                => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'PPU'                => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'ItemDescription'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'ItemType'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'Notes'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'LastUpdated'        => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
    ];

}

