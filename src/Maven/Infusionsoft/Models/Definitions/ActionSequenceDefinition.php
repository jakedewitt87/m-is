<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ActionSequenceDefinition extends BaseDefinition {

    public static $table = 'ActionSequence';
    public static $fields = [
        'Id'                  => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'TemplateName'        => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 50],
        ],
        'VisibleToTheseUsers' => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 200],
        ],
    ];

}

