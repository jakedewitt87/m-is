<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TicketTypeDefinition extends BaseDefinition {

    public static $table = 'TicketType';
    public static $fields = [
        'Id'         => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'CategoryId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Label'      => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
    ];

}

