<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadDefinition extends BaseDefinition
{

    public static $table = 'Lead';
    public static $fields = array (
        'Id'                   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'OpportunityTitle'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ContactID'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'AffiliateId'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'UserID'               => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'StageID'              => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'StatusID'             => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Leadsource'           => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'String'
        ),
        'Objection'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ProjectedRevenueLow'  => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'ProjectedRevenueHigh' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'OpportunityNotes'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'DateCreated'          => array (
            'access' => array ('Edit', 'Delete', 'Read'),
            'type'   => 'DateTime'
        ),
        'LastUpdated'          => array (
            'access' => array ('Edit', 'Delete', 'Read'),
            'type'   => 'DateTime'
        ),
        'LastUpdatedBy'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'CreatedBy'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'EstimatedCloseDate'   => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'NextActionDate'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'NextActionNotes'      => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

