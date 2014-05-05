<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CampaignStepDefinition extends BaseDefinition
{

    public static $table = 'CampaignStep';
    public static $fields = array (
        'Id'         => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CampaignId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'TemplateId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'StepStatus' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'StepTitle'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
    );

}

