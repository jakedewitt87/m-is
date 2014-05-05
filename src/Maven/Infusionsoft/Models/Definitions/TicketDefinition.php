<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TicketDefinition extends BaseDefinition
{

    public static $table = 'Ticket';
    public static $fields = array (
        'Id'                   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'IssueId'              => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ContactId'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'UserId'               => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'DevId'                => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'TicketTitle'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'TicketApplication'    => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'TicketCategory'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'TicketTypeId'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Summary'              => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Stage'                => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Priority'             => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Ordering'             => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'DateCreated'          => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'CreatedBy'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'LastUpdated'          => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'LastUpdatedBy'        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'CloseDate'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'FolowUpDate'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'TargetCompletionDate' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'DateInStage'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'TimeSpent'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'HasCustomerCalled'    => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

