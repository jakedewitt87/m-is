<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactDefinition extends BaseDefinition
{

    public static $table = 'Contact';
    public static $fields = array (
        'Id'                 => array (
            'access'  => array ('Read'),
            'type'    => 'Integer',
            'options' => array ('primary', 'group' => 'General', 'sort' => 1),
        ),
        'Address1Type'       => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 50),
        ),
        'Address2Street1'    => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 150),
        ),
        'Address2Street2'    => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 150),
        ),
        'Address2Type'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Address3Street1'    => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Address3Street2'    => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Address3Type'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Anniversary'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'AssistantName'      => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'AssistantPhone'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillingInformation' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Birthday'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'City'               => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'City2'              => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'City3'              => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Company'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'AccountId'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer',
        ),
        'CompanyID'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer',
        ),
        'ContactNotes'       => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('type' => 'text')
        ),
        'ContactType'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Country'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Country2'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Country3'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CreatedBy'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer',
        ),
        'DateCreated'        => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'Email'              => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 150, 'index'),
        ),
        'EmailAddress2'      => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'EmailAddress3'      => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Fax1'               => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Fax1Type'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Fax2'               => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Fax2Type'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'FirstName'          => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('group' => 'General', 'sort' => 1)
        ),
        'Groups'             => array (
            'access'  => array ('Read'),
            'type'    => 'String',
            'options' => array ('type' => 'text')
        ),
        'JobTitle'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LastName'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LastUpdated'        => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'LastUpdatedBy'      => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Leadsource'         => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LeadSourceId'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'MiddleName'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Nickname'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'OwnerID'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Password'           => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 40),
        ),
        'Phone1'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 30),
        ),
        'Phone1Ext'          => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone1Type'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone2'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 30),
        ),
        'Phone2Ext'          => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone2Type'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone3'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 30),
        ),
        'Phone3Ext'          => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone3Type'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone4'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 30),
        ),
        'Phone4Ext'          => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone4Type'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone5'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 30),
        ),
        'Phone5Ext'          => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'Phone5Type'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'PostalCode'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'PostalCode2'        => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'PostalCode3'        => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'ReferralCode'       => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 60),
        ),
        'SpouseName'         => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 60),
        ),
        'State'              => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 40),
        ),
        'State2'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 40),
        ),
        'State3'             => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 40),
        ),
        'StreetAddress1'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'StreetAddress2'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Suffix'             => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Title'              => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Username'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Validated'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Website'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ZipFour1'           => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'ZipFour2'           => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
        'ZipFour3'           => array (
            'access'  => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'    => 'String',
            'options' => array ('length' => 20),
        ),
    );

}

