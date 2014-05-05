<?php
namespace Maven\Infusionsoft\Models\Definitions;

class TicketTypeDefinition extends BaseDefinition
{

    public static $table = 'TicketType';
    public static $fields = array (
        'Id'         => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CategoryId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Label'      => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

