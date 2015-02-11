<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CChargeDefinition extends BaseDefinition
{

    public static $table = 'CCharge';
    public static $fields = [
        'Id'         => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'CCId'       => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'PaymentId'  => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'MerchantId' => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'OrderNum'   => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 11],
        ],
        'RefNum'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'ApprCode'   => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'Amt'        => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
    ];

}

