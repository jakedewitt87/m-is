<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaignStepDefinition extends BaseDefinition {

    public static $table = 'CampaignStep';
    public static $fields = [
        'Id'         => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'CampaignId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
        'StepStatus' => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 20],
        ],
        'StepTitle'  => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 255],
        ],
        'TemplateId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['unsigned', 'index']
        ],
    ];

}

