<?php
namespace Maven\Infusionsoft\Models\Definitions;

class GroupAssignDefinition extends BaseDefinition
{

    public static $table = 'GroupAssign';
    public static $fields = [
        'Id'      => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'UserId'  => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'GroupId' => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'Admin'   => [
            'access' => ['Read'],
            'type'   => 'TinyInteger'
        ],
    ];

}

