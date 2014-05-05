<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ReferralDefinition extends BaseDefinition
{

    public static $table = 'Referral';
    public static $fields = array (
        'Id'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'   => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'Integer'
        ),
        'AffiliateId' => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'Integer'
        ),
        'DateSet'     => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'Date'
        ),
        'DateExpires' => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'Date'
        ),
        'IPAddress'   => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'String'
        ),
        'Source'      => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'String'
        ),
        'Info'        => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'String'
        ),
        'Type'        => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

