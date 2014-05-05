<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductCategoryDefinition extends BaseDefinition
{

    public static $table = 'ProductCategory';
    public static $fields = array (
        'Id'                  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CategoryDisplayName' => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CategoryImage'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Binary'
        ),
        'CategoryOrder'       => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ParentId'            => array (
            'access' => array ('Edit', 'Delete', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

