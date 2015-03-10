<?php
namespace Maven\Infusionsoft\Models\Definitions;

class RecurringOrderDefinition extends BaseDefinition {

    public static $table = 'RecurringOrder';
    public static $fields = [
        'Id'                  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ContactId'           => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'OriginatingOrderId'  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ProgramId'           => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'SubscriptionPlanId'  => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ProductId'           => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'StartDate'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'EndDate'             => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'LastBillDate'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'NextBillDate'        => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'PaidThruDate'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'BillingCycle'        => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'Frequency'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'BillingAmt'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'Status'              => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ReasonStopped'       => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 255],

        ],
        'AutoCharge'          => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index']

        ],
        'CC1'                 => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'CC2'                 => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'NumDaysBetweenRetry' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'MaxRetry'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'MerchantAccountId'   => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'AffiliateId'         => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'PromoCode'           => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'LeadAffiliateId'     => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Qty'                 => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'ShippingOptionId'    => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
    ];

}

