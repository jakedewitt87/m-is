<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceRecurringExpenseDefinition extends BaseDefinition
{

    public static $table = 'LeadSourceRecurringExpense';
    public static $fields = array (
        'Id'              => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'LeadSourceId'    => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Title'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Notes'           => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Amount'          => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'StartDate'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'EndDate'         => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
        'NextExpenseDate' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'DateTime'
        ),
    );

}

