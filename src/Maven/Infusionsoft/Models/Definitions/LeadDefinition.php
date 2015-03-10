<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadDefinition extends BaseDefinition
{

    public static $table = 'Lead';
    public static $fields = [
        'Id'                   => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'OpportunityTitle'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'ContactID'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'AffiliateId'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'UserID'               => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'StageID'              => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'StatusID'             => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Leadsource'           => [
            'access' => ['Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],

        ],
        'Objection'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 255],

        ],
        'ProjectedRevenueLow'  => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'ProjectedRevenueHigh' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'OpportunityNotes'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'DateCreated'          => [
            'access' => ['Edit', 'Delete', 'Read'],
            'type'   => 'DateTime'
        ],
        'LastUpdated'          => [
            'access' => ['Edit', 'Delete', 'Read'],
            'type'   => 'DateTime'
        ],
        'LastUpdatedBy'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'CreatedBy'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'EstimatedCloseDate'   => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'NextActionDate'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'NextActionNotes'      => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text'
        ],
    ];

}

