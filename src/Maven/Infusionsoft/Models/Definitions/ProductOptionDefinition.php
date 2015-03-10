<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ProductOptionDefinition extends BaseDefinition {

    public static $table = 'ProductOption';
    public static $fields = [
        'Id'           => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ProductId'    => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Label'        => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'IsRequired'   => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'Order'        => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'Name'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'MaxChars'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'CanEndWith'   => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'MinChars'     => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'AllowSpaces'  => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'TextMessage'  => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['length' => 255],

        ],
        'OptionType'   => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 20],

        ],
        'CanContain'   => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
        'CanStartWith' => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 150],

        ],
    ];

}

