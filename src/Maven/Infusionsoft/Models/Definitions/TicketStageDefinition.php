<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TicketStageDefinition extends BaseDefinition
{

    public static $table = 'TicketStage';
    public static $fields = [
        'Id'        => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'StageName' => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
    ];

}

