<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TicketDefinition extends BaseDefinition
{

    public static $table = 'Ticket';
    public static $fields = [
        'Id'                   => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'IssueId'              => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ContactId'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'UserId'               => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'DevId'                => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'TicketTitle'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String'
        ],
        'TicketApplication'    => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String'
        ],
        'TicketCategory'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'TicketTypeId'         => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'Summary'              => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String'
        ],
        'Stage'                => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'Priority'             => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'Ordering'             => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'DateCreated'          => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'CreatedBy'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'LastUpdated'          => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'LastUpdatedBy'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'CloseDate'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'FolowUpDate'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'TargetCompletionDate' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'DateInStage'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'TimeSpent'            => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'HasCustomerCalled'    => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
    ];

}

