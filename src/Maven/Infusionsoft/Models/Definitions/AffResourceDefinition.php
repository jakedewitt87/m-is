<?php
namespace Maven\Infusionsoft\Models\Definitions;

class AffResourceDefinition extends BaseDefinition {

    public static $table = 'AffResource';
    public static $fields = [
        'Id'            => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'Title'         => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
        'ResourceType'  => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['length' => 11],
        ],
        'ResourceOrder' => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 11],
        ],
        'ResourceHTML'  => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'LongText',

        ],
        'ResourceHREF'  => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 255],
        ],
        'Notes'         => [
            'access' => ['Edit', 'Delete', 'Add', 'Read'],
            'type'   => 'Text',

        ],
        'ProgramIds'    => [
            'access'  => ['Edit', 'Delete', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 255],
        ],
    ];

}

