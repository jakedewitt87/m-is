<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ExpenseDefinition extends BaseDefinition {

    public static $table = 'Expense';
    public static $fields = [
        'Id'           => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'ContactId'    => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ExpenseType'  => [
            'access'  => ['Read'],
            'type'    => 'String',
            'options' => ['length' => 30],

        ],
        'TypeId'       => [
            'access'  => ['Read'],
            'type'    => 'Integer',
            'options' => ['index', 'unsigned']

        ],
        'ExpenseAmt'   => [
            'access' => ['Read'],
            'type'   => 'Double'
        ],
        'DateIncurred' => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
    ];

}

