<?php
namespace Maven\Infusionsoft\Models\Definitions;

class PayPlanDefinition extends BaseDefinition
{

    public static $table = 'PayPlan';
    public static $fields = array (
        'Id'          => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'InvoiceId'   => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'DateDue'     => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'AmtDue'      => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'Type'        => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'InitDate'    => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'StartDate'   => array (
            'access' => array ('Read'),
            'type'   => 'Date'
        ),
        'FirstPayAmt' => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
    );

}

