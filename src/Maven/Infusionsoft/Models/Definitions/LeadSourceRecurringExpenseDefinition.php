<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceRecurringExpenseDefinition extends BaseDefinition
{

    public static $table = 'LeadSourceRecurringExpense';
    public static $fields = [
        'Id'              => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'LeadSourceId'    => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Title'           => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],

        ],
        'Notes'           => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'Amount'          => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'StartDate'       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'EndDate'         => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
        'NextExpenseDate' => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
    ];

}

