<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductCategoryAssignDefinition extends BaseDefinition
{

    public static $table = 'ProductCategoryAssign';
    public static $fields = array (
        'Id'                => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ProductId'         => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'ProductCategoryId' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
    );

}

