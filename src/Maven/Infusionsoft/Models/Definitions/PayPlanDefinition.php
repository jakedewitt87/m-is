<?php
namespace Maven\Infusionsoft\Models\Definitions;

class PayPlanDefinition extends BaseDefinition {

    public static $table = 'PayPlan';
    public static $fields = [
        'Id'          => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'InvoiceId'   => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'DateDue'     => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'AmtDue'      => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'Type'        => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index']

        ],
        'InitDate'    => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'StartDate'   => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'FirstPayAmt' => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
    ];

}

