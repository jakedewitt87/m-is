<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactGroupAssignDefinition extends BaseDefinition
{

    public static $table = 'ContactGroupAssign';
    public static $fields = array (
        'GroupId'                    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactGroup'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'DateCreated'                => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'ContactId'                  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Contact.Address1Type'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Address2Street1'    => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Address2Street2'    => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Address2Type'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Address3Street1'    => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Address3Street2'    => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Address3Type'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Anniversary'        => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'Contact.AssistantName'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.AssistantPhone'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.BillingInformation' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Birthday'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.City'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.City2'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.City3'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Company'            => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.CompanyID'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Contact.ContactNotes'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.ContactType'        => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Country'            => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Country2'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Country3'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.CreatedBy'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Contact.DateCreated'        => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'Contact.Email'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.EmailAddress2'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.EmailAddress3'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Fax1'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Fax1Type'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Fax2'               => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Fax2Type'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.FirstName'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Groups'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.HTMLSignature'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Id'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Contact.JobTitle'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.LastName'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.LastUpdated'        => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.LastUpdatedBy'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Leadsource'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.MiddleName'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Nickname'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.OwnerID'            => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Contact.Phone1'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone1Ext'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone1Type'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone2'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone2Ext'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone2Type'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone3'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone3Ext'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone3Type'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone4'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone4Ext'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone4Type'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone5'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone5Ext'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Phone5Type'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.PostalCode'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.PostalCode2'        => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.PostalCode3'        => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.ReferralCode'       => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Signature'          => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.SpouseName'         => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.State'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.State2'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.State3'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.StreetAddress1'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.StreetAddress2'     => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Suffix'             => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Title'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.Website'            => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.ZipFour1'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.ZipFour2'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Contact.ZipFour3'           => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

