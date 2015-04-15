<?php
namespace Maven\Infusionsoft\Models\Definitions;

class InvoiceDefinition extends BaseDefinition {

    public static $table = 'Invoice';
    public static $fields = [
        'Id'              => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'ContactId'       => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'JobId'           => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'DateCreated'     => [
            'access' => ['Read'],
            'type'   => 'DateTime',
            'options' => ['index']
        ],
        'InvoiceTotal'    => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'TotalPaid'       => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'TotalDue'        => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'PayStatus'       => [
            'access'  => ['Read'],
            'type'    => 'MediumInteger',
            'options' => ['index']

        ],
        'CreditStatus'    => [
            'access'  => ['Read'],
            'type'    => 'MediumInteger',
            'options' => ['index']

        ],
        'RefundStatus'    => [
            'access'  => ['Read'],
            'type'    => 'MediumInteger',
            'options' => ['index']

        ],
        'PayPlanStatus'   => [
            'access'  => ['Read'],
            'type'    => 'MediumInteger',
            'options' => ['index']

        ],
        'AffiliateId'     => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'LeadAffiliateId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'PromoCode'       => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'InvoiceType'     => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Description'     => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 255],
        ],
        'ProductSold'     => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 255],
        ],
        'Synced'          => [
            'access' => ['Read'],
            'type'   => 'TinyInteger'
        ],
        'LastUpdated'     => [
            'access' => ['Read'],
            'type'   => 'DateTime',
            'options' => ['index']
        ],
    ];

}

