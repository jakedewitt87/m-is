<?php
namespace Maven\Infusionsoft\Models\Definitions;

class StageMoveDefinition extends BaseDefinition
{

    public static $table = 'StageMove';
    public static $fields = [
        'Id'                => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'OpportunityId'     => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'MoveDate'          => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'MoveToStage'       => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'MoveFromStage'     => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'PrevStageMoveDate' => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'CreatedBy'         => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'DateCreated'       => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'UserId'            => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
    ];

}

