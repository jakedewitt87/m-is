<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaignDefinition extends BaseDefinition
{

    public static $table = 'Campaign';
    public static $fields = [
        'Id'     => [
            'access' => ['Read'],
            'type'   => 'Integer'
        ],
        'Name'   => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
        'Status' => [
            'access' => ['Read'],
            'type'   => 'String'
        ],
    ];

}

