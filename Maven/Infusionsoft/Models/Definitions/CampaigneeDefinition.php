<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaigneeDefinition extends BaseDefinition
{

    public static $table = 'Campaignee';
    public static $fields = array (
        'Id'         => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CampaignId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Status'     => array (
            'access' => array ('Read'),
            'type'   => 'Enum'
        ),
        'Campaign'   => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ContactId'  => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
    );

}

