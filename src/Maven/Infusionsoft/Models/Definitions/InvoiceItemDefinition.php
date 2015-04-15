<?php
namespace Maven\Infusionsoft\Models\Definitions;

class InvoiceItemDefinition extends BaseDefinition {

    public static $table = 'InvoiceItem';
    public static $fields = [
        'Id'               => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'InvoiceId'        => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'OrderItemId'      => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'InvoiceAmt'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'Discount'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'DateCreated'      => [
            'access' => ['Read'],
            'type'   => 'DateTime',
            'options' => ['index']
        ],
        'Description'      => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 2048],
        ],
        'CommissionStatus' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'LastUpdated'      => [
            'access' => ['Read'],
            'type'   => 'DateTime',
            'options' => ['index']
        ],
    ];

}

