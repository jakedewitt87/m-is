<?php
namespace Maven\Infusionsoft\Models\Definitions;

class UserDefinition extends BaseDefinition
{

    public static $table = 'User';
    public static $fields = [
        'Id'             => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'City'           => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'Email'          => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'EmailAddress2'  => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'EmailAddress3'  => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'FirstName'      => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'HTMLSignature'  => [
            'access' => ['Read'],
            'type'   => 'Text'
        ],
        'LastName'       => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'MiddleName'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'Nickname'       => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'Phone1'         => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 20],

        ],
        'Phone1Ext'      => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 10],

        ],
        'Phone1Type'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 15],

        ],
        'Phone2'         => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 20],

        ],
        'Phone2Ext'      => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 10],

        ],
        'Phone2Type'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 15],

        ],
        'PostalCode'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'Signature'      => [
            'access' => ['Read'],
            'type'   => 'Text'

        ],
        'SpouseName'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'State'          => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'StreetAddress1' => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'StreetAddress2' => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'Suffix'         => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 20],

        ],
        'Title'          => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 20],

        ],
        'ZipFour1'       => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 20],

        ],
    ];

}

