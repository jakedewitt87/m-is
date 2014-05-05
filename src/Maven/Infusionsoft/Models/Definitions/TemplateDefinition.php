<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TemplateDefinition extends BaseDefinition
{

    public static $table = 'Template';
    public static $fields = array (
        'Id'         => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PieceType'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'PieceTitle' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Categories' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

