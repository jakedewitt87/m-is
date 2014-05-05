<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaignDefinition extends BaseDefinition
{

    public static $table = 'Campaign';
    public static $fields = array (
        'Id'     => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Name'   => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Status' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

