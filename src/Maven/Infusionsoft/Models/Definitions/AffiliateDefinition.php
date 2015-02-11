<?php
namespace Maven\Infusionsoft\Models\Definitions;

class AffiliateDefinition extends BaseDefinition {

    public static $table = 'Affiliate';
    public static $fields = [
        'Id'                => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'ContactId'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'ParentId'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'LeadAmt'           => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'LeadPercent'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'SaleAmt'           => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'SalePercent'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'PayoutType'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'DefCommissionType' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'Status'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger',
            'options' => ['unsigned']
        ],
        'AffName'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'Password'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 40],
        ],
        'AffCode'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 30],
        ],
        'NotifyLead'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'NotifySale'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'LeadCookieFor'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger',
            'options' => ['unsigned']
        ],
    ];

}

