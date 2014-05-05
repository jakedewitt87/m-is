<?php
namespace Maven\Infusionsoft\Models\Definitions;

class PayPlanItemDefinition extends BaseDefinition
{

    public static $table = 'PayPlanItem';
    public static $fields = array (
        'Id'        => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'PayPlanId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'DateDue'   => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'AmtDue'    => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'Status'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'AmtPaid'   => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
    );

}

