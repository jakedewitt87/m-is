<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ContactGroupCategoryDefinition extends BaseDefinition
{

    public static $table = 'ContactGroupCategory';
    public static $fields = array (
        'Id'                  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CategoryName'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CategoryDescription' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

