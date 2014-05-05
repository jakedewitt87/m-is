<?php
namespace Maven\Infusionsoft\Models\Definitions;

class JobRecurringInstanceDefinition extends BaseDefinition
{

    public static $table = 'JobRecurringInstance';
    public static $fields = array (
        'Id'            => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'RecurringId'   => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'InvoiceItemId' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Status'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'AutoCharge'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'StartDate'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'EndDate'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'DateCreated'   => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'Description'   => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

