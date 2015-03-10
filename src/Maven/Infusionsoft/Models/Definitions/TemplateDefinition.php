<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TemplateDefinition extends BaseDefinition {

    public static $table = 'Template';
    public static $fields = [
        'Id'         => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'PieceType'  => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'PieceTitle' => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'Categories' => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 200],

        ],
    ];

}

