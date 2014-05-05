<?php
namespace Maven\Infusionsoft\Models\Definitions;

class UserDefinition extends BaseDefinition
{

    public static $table = 'User';
    public static $fields = array (
        'Id'             => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'City'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Email'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'EmailAddress2'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'EmailAddress3'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'FirstName'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'HTMLSignature'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'LastName'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'MiddleName'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Nickname'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone1'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone1Ext'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone1Type'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone2'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone2Ext'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Phone2Type'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'PostalCode'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Signature'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'SpouseName'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'State'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StreetAddress1' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StreetAddress2' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Suffix'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Title'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ZipFour1'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

