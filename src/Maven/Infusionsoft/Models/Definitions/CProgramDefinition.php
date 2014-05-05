<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CProgramDefinition extends BaseDefinition
{

    public static $table = 'CProgram';
    public static $fields = array (
        'Id'               => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ProgramName'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'DefaultPrice'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'DefaultCycle'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'DefaultFrequency' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Sku'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShortDescription' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillingType'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Description'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'HideInStore'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Status'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Active'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Boolean'
        ),
        'LargeImage'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Binary'
        ),
        'Taxable'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Family'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ProductId'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

