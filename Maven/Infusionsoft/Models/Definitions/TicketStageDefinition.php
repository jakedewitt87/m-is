<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TicketStageDefinition extends BaseDefinition
{

    public static $table = 'TicketStage';
    public static $fields = array (
        'Id'        => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'StageName' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

