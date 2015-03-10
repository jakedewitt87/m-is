<?php
namespace Maven\Infusionsoft\Models\Definitions;

class SavedFilterDefinition extends BaseDefinition
{

    public static $table = 'SavedFilter';
    public static $fields = [
        'Id'               => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'FilterName'       => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'ReportStoredName' => [
            'access' => ['Read'],
            'type'   => 'Text'

        ],
        'UserId'           => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
    ];

}

