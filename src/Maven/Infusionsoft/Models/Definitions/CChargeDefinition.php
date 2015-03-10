<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CChargeDefinition extends BaseDefinition {

    public static $table = 'CCharge';
    public static $fields = [
        'Id'         => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'Amt'        => [
            'access' => ['Read'],
            'type'   => 'Double',
        ],
        'ApprCode'   => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'CCId'       => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'MerchantId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned']
        ],
        'OrderNum'   => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'PaymentId'  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'RefNum'     => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
    ];

}

