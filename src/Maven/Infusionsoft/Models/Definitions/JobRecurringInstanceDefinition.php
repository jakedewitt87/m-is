<?php
namespace Maven\Infusionsoft\Models\Definitions;

class JobRecurringInstanceDefinition extends BaseDefinition
{

    public static $table = 'JobRecurringInstance';
    public static $fields = [
        'Id'            => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'RecurringId'   => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'InvoiceItemId' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Status'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'AutoCharge'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index']

        ],
        'StartDate'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'EndDate'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'DateCreated'   => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'Description'   => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 255],

        ],
    ];

}

