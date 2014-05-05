<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactActionDefinition extends BaseDefinition
{

    public static $table = 'ContactAction';
    public static $fields = array (
        'Id'                => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'OpportunityId'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ActionType'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ActionDescription' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CreationDate'      => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'CreationNotes'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CompletionDate'    => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'ActionDate'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'EndDate'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'PopupDate'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'UserID'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Accepted'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'CreatedBy'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'LastUpdated'       => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'LastUpdatedBy'     => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Priority'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'IsAppointment'     => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

