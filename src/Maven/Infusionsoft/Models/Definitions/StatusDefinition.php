<?php
namespace Maven\Infusionsoft\Models\Definitions;

class StatusDefinition extends BaseDefinition {

    public static $table = 'Status';
    public static $fields = [
        'Id'            => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'StatusName'    => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 30],

        ],
        'StatusOrder'   => [
            'access' => ['Read'],
            'type'   => 'Integer'

        ],
        'TargetNumDays' => [
            'access' => ['Read'],
            'type'   => 'Integer'

        ],
    ];

}

