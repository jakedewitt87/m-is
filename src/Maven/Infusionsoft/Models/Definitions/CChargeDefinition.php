<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CChargeDefinition extends BaseDefinition
{

    public static $table = 'CCharge';
    public static $fields = array (
        'Id'         => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CCId'       => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PaymentId'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'MerchantId' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'OrderNum'   => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'RefNum'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ApprCode'   => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Amt'        => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
    );

}

