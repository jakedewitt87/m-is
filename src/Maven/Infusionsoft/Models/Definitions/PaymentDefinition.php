<?php
namespace Maven\Infusionsoft\Models\Definitions;

class PaymentDefinition extends BaseDefinition {

    public static $table = 'Payment';
    public static $fields = [
        'Id'          => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'PayDate'     => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'UserId'      => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'PayAmt'      => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'PayType'     => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ContactId'   => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'PayNote'     => [
            'access' => ['Read'],
            'type'   => 'Text'
        ],
        'InvoiceId'   => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'RefundId'    => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ChargeId'    => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Commission'  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index']

        ],
        'Synced'      => [
            'access' => ['Read'],
            'type'   => 'TinyInteger'
        ],
        'LastUpdated' => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
    ];

}

