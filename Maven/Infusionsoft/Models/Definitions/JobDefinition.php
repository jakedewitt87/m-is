<?php
namespace Maven\Infusionsoft\Models\Definitions;

class JobDefinition extends BaseDefinition
{

    public static $table = 'Job';
    public static $fields = array (
        'Id'             => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'JobTitle'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ContactId'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'StartDate'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'DueDate'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'JobNotes'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ProductId'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'JobStatus'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'DateCreated'    => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'JobRecurringId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'OrderType'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'OrderStatus'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ShipFirstName'  => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipMiddleName' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipLastName'   => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipCompany'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipPhone'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipStreet1'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipStreet2'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipCity'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipState'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipZip'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipCountry'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LastUpdated'    => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

