<?php
namespace Maven\Infusionsoft\Models\Definitions;

class ExpenseDefinition extends BaseDefinition
{

    public static $table = 'Expense';
    public static $fields = array (
        'Id'           => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ExpenseType'  => array (
            'access' => array ('Read'),
            'type'   => 'Enum'
        ),
        'TypeId'       => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ExpenseAmt'   => array (
            'access' => array ('Read'),
            'type'   => 'Double'
        ),
        'DateIncurred' => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

