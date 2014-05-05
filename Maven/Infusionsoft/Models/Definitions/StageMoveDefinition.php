<?php
namespace Maven\Infusionsoft\Models\Definitions;

class StageMoveDefinition extends BaseDefinition
{

    public static $table = 'StageMove';
    public static $fields = array (
        'Id'                => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
        'OpportunityId'     => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
        'MoveDate'          => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'MoveToStage'       => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
        'MoveFromStage'     => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
        'PrevStageMoveDate' => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'CreatedBy'         => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
        'DateCreated'       => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'UserId'            => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
    );

}

