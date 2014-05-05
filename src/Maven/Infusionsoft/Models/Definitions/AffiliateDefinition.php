<?php
namespace Maven\Infusionsoft\Models\Definitions;

class AffiliateDefinition extends BaseDefinition
{

    public static $table = 'Affiliate';
    public static $fields = array (
        'Id'                => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ParentId'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'LeadAmt'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'LeadPercent'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'SaleAmt'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'SalePercent'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'PayoutType'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'DefCommissionType' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Status'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'AffName'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Password'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'AffCode'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'NotifyLead'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'NotifySale'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'LeadCookieFor'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

