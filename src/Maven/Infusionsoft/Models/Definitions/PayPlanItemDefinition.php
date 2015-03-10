<?php
namespace Maven\Infusionsoft\Models\Definitions;

class PayPlanItemDefinition extends BaseDefinition
{

    public static $table = 'PayPlanItem';
    public static $fields = [
        'Id'        => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'PayPlanId' => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'DateDue'   => [
            'access' => ['Read'],
            'type'   => 'Date'
        ],
        'AmtDue'    => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'Status'    => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'AmtPaid'   => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
    ];

}

