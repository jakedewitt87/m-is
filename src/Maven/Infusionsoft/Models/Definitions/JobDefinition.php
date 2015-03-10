<?php
namespace Maven\Infusionsoft\Models\Definitions;

class JobDefinition extends BaseDefinition {

    public static $table = 'Job';
    public static $fields = [
        'Id'             => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'JobTitle'       => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ContactId'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer'
        ],
        'StartDate'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'DueDate'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'JobNotes'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'ProductId'      => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'JobStatus'      => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'DateCreated'    => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'JobRecurringId' => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'OrderType'      => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'OrderStatus'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger'
        ],
        'ShipFirstName'  => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'ShipMiddleName' => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'ShipLastName'   => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'ShipCompany'    => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ShipPhone'      => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 30],

        ],
        'ShipStreet1'    => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ShipStreet2'    => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 100],

        ],
        'ShipCity'       => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'ShipState'      => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 50],

        ],
        'ShipZip'        => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 30],

        ],
        'ShipCountry'    => [
            'access'  => ['Edit', 'Add', 'Read'],
            'type'    => 'String',
            'options' => ['length' => 60],

        ],
        'LastUpdated'    => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
    ];

}

