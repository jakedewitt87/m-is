<?php
namespace Maven\Infusionsoft\Models\Definitions;

class SubscriptionPlanDefinition extends BaseDefinition {

    public static $table = 'SubscriptionPlan';
    public static $fields = [
        'Id'                 => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ProductId'          => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Cycle'              => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 30],

        ],
        'Frequency'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'PreAuthorizeAmount' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'Prorate'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Boolean'
        ],
        'Active'             => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Boolean'
        ],
        'PlanPrice'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
    ];

}

