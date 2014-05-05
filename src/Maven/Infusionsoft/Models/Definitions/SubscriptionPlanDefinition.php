<?php
namespace Maven\Infusionsoft\Models\Definitions;

class SubscriptionPlanDefinition extends BaseDefinition
{

    public static $table = 'SubscriptionPlan';
    public static $fields = array (
        'Id'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ProductId'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'Cycle'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Frequency'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Integer'
        ),
        'PreAuthorizeAmount' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
        'Prorate'            => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Boolean'
        ),
        'Active'             => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Boolean'
        ),
        'PlanPrice'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'Double'
        ),
    );

}

