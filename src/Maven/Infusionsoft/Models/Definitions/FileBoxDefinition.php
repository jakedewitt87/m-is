<?php
namespace Maven\Infusionsoft\Models\Definitions;

class FileBoxDefinition extends BaseDefinition {

    public static $table = 'FileBox';
    public static $fields = [
        'Id'        => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'FileName'  => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 200],
        ],
        'Extension' => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 4],
        ],
        'FileSize'  => [
            'access' => ['Read'],
            'type'   => 'BigInteger'
        ],
        'ContactId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Public'    => [
            'access' => ['Read'],
            'type'   => 'MediumInteger'

        ],
    ];

}

