<?php
namespace Maven\Infusionsoft\Models\Definitions;

class RecurringOrderWithContactDefinition extends BaseDefinition {

    public static $table = 'RecurringOrderWithContact';
    public static $fields = [
        'RecurringOrderId'    => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'ContactId'           => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'ProgramId'           => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'SubscriptionPlanId'  => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'ProductId'           => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'StartDate'           => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'EndDate'             => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'LastBillDate'        => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'NextBillDate'        => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'PaidThruDate'        => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'BillingCycle'        => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Frequency'           => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'BillingAmt'          => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'Status'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'ReasonStopped'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'AutoCharge'          => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'CC1'                 => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'CC2'                 => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'NumDaysBetweenRetry' => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'MaxRetry'            => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'MerchantAccountId'   => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'AffiliateId'         => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'PromoCode'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'LeadAffiliateId'     => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'Qty'                 => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'City'                => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Email'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'EmailAddress2'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'EmailAddress3'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'FirstName'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'HTMLSignature'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'LastName'            => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'MiddleName'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Nickname'            => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Phone1'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Phone1Ext'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Phone1Type'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Phone2'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Phone2Ext'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Phone2Type'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'PostalCode'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Signature'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'SpouseName'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'State'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Country'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'StreetAddress1'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'StreetAddress2'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Suffix'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Title'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'ZipFour1'            => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
    ];

}

