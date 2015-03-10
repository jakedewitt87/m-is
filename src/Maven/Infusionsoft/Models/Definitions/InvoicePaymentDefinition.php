<?php
namespace Maven\Infusionsoft\Models\Definitions;

class InvoicePaymentDefinition extends BaseDefinition
{

    public static $table = 'InvoicePayment';
    public static $fields = [
        'Id'             => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'InvoiceId'      => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Amt'            => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'PayDate'        => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'PayStatus'      => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'PaymentId'      => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'SkipCommission' => [
            'access' => ['Read'],
            'type'   => 'TinyInteger',

        ],
        'LastUpdated'    => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
    ];

}

