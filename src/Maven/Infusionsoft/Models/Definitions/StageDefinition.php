<?php
namespace Maven\Infusionsoft\Models\Definitions;

class StageDefinition extends BaseDefinition
{

    public static $table = 'Stage';
    public static $fields = [
        'Id'            => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'StageName'     => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 30],

        ],
        'StageOrder'    => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'TargetNumDays' => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
    ];

}

