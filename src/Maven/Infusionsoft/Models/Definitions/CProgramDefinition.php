<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CProgramDefinition extends BaseDefinition
{

    public static $table = 'CProgram';
    public static $fields = [
        'Id'               => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'ProgramName'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'DefaultPrice'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Double'
        ],
        'DefaultCycle'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 30],
        ],
        'DefaultFrequency' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'MediumInteger'
        ],
        'Sku'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'ShortDescription' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 150],
        ],
        'BillingType'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 20],
        ],
        'Description'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'HideInStore'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger',
            'options' => ['unsigned']
        ],
        'Status'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'TinyInteger',
            'options' => ['index']
        ],
        'Active'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Boolean',
            'options' => ['index']
        ],
        'LargeImage'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Text'
        ],
        'Taxable'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Boolean'
        ],
        'Family'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50]
        ],
        'ProductId'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
    ];

}

