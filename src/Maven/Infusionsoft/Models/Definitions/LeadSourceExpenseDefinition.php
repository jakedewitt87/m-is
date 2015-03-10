<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceExpenseDefinition extends BaseDefinition {

    public static $table = 'LeadSourceExpense';
    public static $fields = [
        'Id'                           => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'LeadSourceRecurringExpenseId' => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'LeadSourceId'                 => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Title'                        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'Notes'                        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'Amount'                       => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'DateIncurred'                 => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'DateTime'
        ],
    ];

}

