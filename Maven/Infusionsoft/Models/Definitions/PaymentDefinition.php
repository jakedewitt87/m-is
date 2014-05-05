<?php
namespace Maven\Infusionsoft\Models\Definitions;

class PaymentDefinition extends BaseDefinition
{

    public static $table = 'Payment';
    public static $fields = array (
        'Id'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PayDate'     => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'UserId'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PayAmt'      => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'PayType'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ContactId'   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PayNote'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'InvoiceId'   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'RefundId'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ChargeId'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Commission'  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Synced'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'LastUpdated' => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

