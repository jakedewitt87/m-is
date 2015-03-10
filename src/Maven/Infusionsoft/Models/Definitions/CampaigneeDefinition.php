<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaigneeDefinition extends BaseDefinition
{

    public static $table = 'Campaignee';
    public static $fields = [
        'Id'                => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'Campaign'          => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 75],
        ],
        'CampaignId'         => [
            'access'  => ['Read'],
            'type'   => 'Integer',
            'options' => ['unsigned','index']
        ],
        'ContactId'         => [
            'access'  => ['Read'],
            'type'   => 'Integer',
            'options' => ['unsigned','index']
        ],
        'Status'          => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 15],
        ],
    ];

}

