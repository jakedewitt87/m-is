<?php
namespace Maven\Infusionsoft\Models\Definitions;

class InvoicePaymentDefinition extends BaseDefinition
{

    public static $table = 'InvoicePayment';
    public static $fields = array (
        'Id'             => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'InvoiceId'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Amt'            => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'PayDate'        => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'PayStatus'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'PaymentId'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'SkipCommission' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'LastUpdated'    => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

