<?php
namespace Maven\Infusionsoft\Models\Definitions;

class RecurringOrderWithContactDefinition extends BaseDefinition
{

    public static $table = 'RecurringOrderWithContact';
    public static $fields = array (
        'RecurringOrderId'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ProgramId'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'SubscriptionPlanId'  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ProductId'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'StartDate'           => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'EndDate'             => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'LastBillDate'        => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'NextBillDate'        => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'PaidThruDate'        => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'BillingCycle'        => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Frequency'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'BillingAmt'          => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'Status'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ReasonStopped'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'AutoCharge'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CC1'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CC2'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'NumDaysBetweenRetry' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'MaxRetry'            => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'MerchantAccountId'   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'AffiliateId'         => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PromoCode'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'LeadAffiliateId'     => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Qty'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'City'                => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Email'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'EmailAddress2'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'EmailAddress3'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'FirstName'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'HTMLSignature'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'LastName'            => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'MiddleName'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Nickname'            => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone1'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone1Ext'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone1Type'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone2'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone2Ext'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone2Type'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'PostalCode'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Signature'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'SpouseName'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'State'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Country'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StreetAddress1'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StreetAddress2'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Suffix'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Title'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ZipFour1'            => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

