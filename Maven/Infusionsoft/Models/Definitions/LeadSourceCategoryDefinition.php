<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceCategoryDefinition extends BaseDefinition
{

    public static $table = 'LeadSourceCategory';
    public static $fields = array (
        'Id'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Name'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Description' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

