<?php
namespace Maven\Infusionsoft\Models\Definitions;

class LeadSourceDefinition extends BaseDefinition
{

    public static $table = 'LeadSource';
    public static $fields = [
        'Id'                   => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'Name'                 => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],

        ],
        'Description'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'StartDate'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'EndDate'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Date'
        ],
        'CostPerLead'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 30],

        ],
        'Vendor'               => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],

        ],
        'Medium'               => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],

        ],
        'Message'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],

        ],
        'LeadSourceCategoryId' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'Status'               => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 20],

        ],
    ];

}

