<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactActionDefinition extends BaseDefinition {

    public static $table = 'ContactAction';
    public static $fields = [
        'Id'                => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'ContactId'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'OpportunityId'     => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'ActionType'        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],
        ],
        'ActionDescription' => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'CreationDate'      => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'CreationNotes'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'CompletionDate'    => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'ActionDate'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'EndDate'           => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'PopupDate'         => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'UserID'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'Accepted'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'CreatedBy'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'LastUpdated'       => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'LastUpdatedBy'     => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned'],
        ],
        'Priority'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'IsAppointment'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
    ];

}

