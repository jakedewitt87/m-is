<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaignDefinition extends BaseDefinition
{

    public static $table = 'Campaign';
    public static $fields = [
        'Id'                => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'Name'         => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 75],
        ],
        'Status'          => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 25],
        ],
    ];

}

