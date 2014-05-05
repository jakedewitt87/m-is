<?php
namespace Maven\Infusionsoft\Models\Definitions;

class RecurringOrderDefinition extends BaseDefinition
{

    public static $table = 'RecurringOrder';
    public static $fields = array (
        'Id'                  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'OriginatingOrderId'  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ProgramId'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'SubscriptionPlanId'  => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ProductId'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'StartDate'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'EndDate'             => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'LastBillDate'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'NextBillDate'        => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'PaidThruDate'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'BillingCycle'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Frequency'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'BillingAmt'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'Status'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ReasonStopped'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'AutoCharge'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'CC1'                 => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'CC2'                 => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'NumDaysBetweenRetry' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'MaxRetry'            => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'MerchantAccountId'   => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'AffiliateId'         => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'PromoCode'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LeadAffiliateId'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Qty'                 => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ShippingOptionId'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

