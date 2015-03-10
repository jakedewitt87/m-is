<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ReferralDefinition extends BaseDefinition
{

    public static $table = 'Referral';
    public static $fields = [
        'Id'          => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ContactId'   => [
            'access' => ['Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'AffiliateId' => [
            'access' => ['Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'DateSet'     => [
            'access' => ['Add', 'Read'],
            'type'   => 'Date'
        ],
        'DateExpires' => [
            'access' => ['Add', 'Read'],
            'type'   => 'Date'
        ],
        'IPAddress'   => [
            'access' => ['Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'Source'      => [
            'access' => ['Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'Info'        => [
            'access' => ['Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 255],

        ],
        'Type'        => [
            'access' => ['Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
    ];

}

