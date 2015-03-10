<?php
namespace Maven\Infusionsoft\Models\Definitions;

class DataFormTabDefinition extends BaseDefinition {

    public static $table = 'DataFormTab';
    public static $fields = [
        'Id'      => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'FormId'  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'TabName' => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100]

        ],
    ];

}

