<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactGroupAssignDefinition extends BaseDefinition
{

    public static $table = 'ContactGroupAssign';
    public static $fields = [
        'GroupId'                    => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'ContactGroup'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'DateCreated'                => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'ContactId'                  => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'Contact.Address1Type'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Address2Street1'    => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Address2Street2'    => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Address2Type'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Address3Street1'    => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Address3Street2'    => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Address3Type'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Anniversary'        => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'Contact.AssistantName'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.AssistantPhone'     => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.BillingInformation' => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Birthday'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.City'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.City2'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.City3'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Company'            => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.CompanyID'          => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'Contact.ContactNotes'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.ContactType'        => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Country'            => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Country2'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Country3'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.CreatedBy'          => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'Contact.DateCreated'        => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'Contact.Email'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.EmailAddress2'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.EmailAddress3'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Fax1'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Fax1Type'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Fax2'               => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Fax2Type'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.FirstName'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Groups'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Id'                 => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'Contact.JobTitle'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.LastName'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.LastUpdated'        => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.LastUpdatedBy'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Leadsource'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.MiddleName'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Nickname'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.OwnerID'            => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'Contact.Phone1'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone1Ext'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone1Type'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone2'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone2Ext'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone2Type'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone3'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone3Ext'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone3Type'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone4'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone4Ext'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone4Type'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone5'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone5Ext'          => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Phone5Type'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.PostalCode'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.PostalCode2'        => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.PostalCode3'        => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.ReferralCode'       => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.SpouseName'         => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.State'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.State2'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.State3'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.StreetAddress1'     => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.StreetAddress2'     => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Suffix'             => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Title'              => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.Website'            => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.ZipFour1'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.ZipFour2'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Contact.ZipFour3'           => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
    ];

}

