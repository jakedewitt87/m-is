<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ActionSequenceDefinition extends BaseDefinition
{

    public static $table = 'ActionSequence';
    public static $fields = array (
        'Id'                  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'TemplateName'        => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'VisibleToTheseUsers' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

