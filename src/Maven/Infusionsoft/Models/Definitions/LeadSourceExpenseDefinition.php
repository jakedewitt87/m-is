<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceExpenseDefinition extends BaseDefinition
{

    public static $table = 'LeadSourceExpense';
    public static $fields = array (
        'Id'                           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'LeadSourceRecurringExpenseId' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'LeadSourceId'                 => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Title'                        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Notes'                        => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Amount'                       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'DateIncurred'                 => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
    );

}

