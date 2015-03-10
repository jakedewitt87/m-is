<?php
namespace Maven\Infusionsoft\Models\Definitions;

class DataFormGroupDefinition extends BaseDefinition {

    public static $table = 'DataFormGroup';
    public static $fields = [
        'Id'    => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'TabId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'Name'  => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 100],
        ],
    ];

}

