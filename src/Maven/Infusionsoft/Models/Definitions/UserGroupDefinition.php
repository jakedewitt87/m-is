<?php
namespace Maven\Infusionsoft\Models\Definitions;

class UserGroupDefinition extends BaseDefinition
{

    public static $table = 'UserGroup';
    public static $fields = [
        'Id'      => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'Name'    => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 100],

        ],
        'OwnerId' => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
    ];

}

