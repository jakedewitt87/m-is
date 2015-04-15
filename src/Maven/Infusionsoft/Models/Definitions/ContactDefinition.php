<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactDefinition extends BaseDefinition {

    public static $table = 'Contact';
    public static $fields = [
        'Id'                 => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'AccountId'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'Address1Type'       => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Address2Street1'    => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Address2Street1'    => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Address2Type'       => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'Address3Street1'    => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Address3Street2'    => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Address3Type'       => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Anniversary'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Date',
        ],
        'AssistantName'      => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'AssistantPhone'     => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'BillingInformation' => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Birthday'           => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime',
        ],
        'City'               => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'City2'              => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'City3'              => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'Company'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'CompanyID'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'ContactNotes'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'ContactType'        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],
        ],
        'Country'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Country2'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Country3'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'CreatedBy'          => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'DateCreated'        => [
            'access' => ['Read'],
            'type'   => 'DateTime',
            'options' => ['index']
        ],
        'Email'              => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 75],
        ],
        'EmailAddress2'      => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'EmailAddress3'      => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Fax1'               => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Fax1Type'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'Fax2'               => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Fax2Type'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'FirstName'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 40],
        ],
        'Groups'             => [
            'access' => ['Read'],
            'type'   => 'Text'
        ],
        'JobTitle'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'LastName'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 40],
        ],
        'LastUpdated'        => [
            'access' => ['Read'],
            'type'   => 'DateTime',
            'options' => ['index']
        ],
        'LastUpdatedBy'      => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned']
        ],
        'Leadsource'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],
        ],
        'LeadSourceId'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'MiddleName'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Nickname'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'OwnerID'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'Password'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'Phone1'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Phone1Ext'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
        'Phone1Type'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'Phone2'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Phone2Ext'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],

        'Phone2Type'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'Phone3'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Phone3Ext'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
        'Phone3Type'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'Phone4'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Phone4Ext'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
        'Phone4Type'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'Phone5'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Phone5Ext'          => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
        'Phone5Type'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'PostalCode'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'PostalCode2'        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'PostalCode3'        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'SpouseName'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'State'              => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'State2'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'State3'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'StreetAddress1'     => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 75],
        ],
        'StreetAddress2'     => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 75],
        ],
        'Suffix'             => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
        'Title'              => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 30],
        ],
        'Username'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 75],
        ],
        'Validated'          => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'Website'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'ZipFour1'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
        'ZipFour2'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
        'ZipFour3'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 10],
        ],
    ];

}

