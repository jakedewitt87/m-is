<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceDefinition extends BaseDefinition
{

    public static $table = 'LeadSource';
    public static $fields = array (
        'Id'                   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Name'                 => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Description'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'StartDate'            => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'EndDate'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Date'
        ),
        'CostPerLead'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Vendor'               => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Medium'               => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Message'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LeadSourceCategoryId' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Status'               => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

