<?php
namespace Maven\Infusionsoft\Models\Definitions;

class InvoiceDefinition extends BaseDefinition
{

    public static $table = 'Invoice';
    public static $fields = array (
        'Id'              => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'       => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'JobId'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'DateCreated'     => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'InvoiceTotal'    => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'TotalPaid'       => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'TotalDue'        => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'PayStatus'       => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CreditStatus'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'RefundStatus'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PayPlanStatus'   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'AffiliateId'     => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'LeadAffiliateId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PromoCode'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'InvoiceType'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Description'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ProductSold'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Synced'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'LastUpdated'     => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

