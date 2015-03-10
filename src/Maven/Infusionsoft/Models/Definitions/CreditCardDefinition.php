<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CreditCardDefinition extends BaseDefinition
{

    public static $table = 'CreditCard';
    public static $fields = [
        'Id'                 => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']
        ],
        'ContactId'          => [
            'access' => ['Add', 'Read'],
            'type'   => 'Integer',
            'options' => ['index', 'unsigned']
        ],
        'BillName'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'FirstName'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 60],
        ],
        'LastName'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 60],
        ],
        'PhoneNumber'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'Email'              => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'BillAddress1'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'BillAddress2'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'BillCity'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'BillState'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'BillZip'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 30],
        ],
        'BillCountry'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 60],
        ],
        'ShipFirstName'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'ShipMiddleName'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'ShipLastName'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'ShipCompanyName'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'ShipPhoneNumber'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 30],
        ],
        'ShipAddress1'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'ShipAddress2'       => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'ShipCity'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'ShipState'          => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'ShipZip'            => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 30],
        ],
        'ShipCountry'        => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 60],
        ],
        'ShipName'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'NameOnCard'         => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
        'CardNumber'         => [
            'access' => ['Add'],
            'type'   => 'String',
            'options' => ['length' => 30],
        ],
        'Last4'              => [
            'access' => ['Read'],
            'type'   => 'String',
            'options' => ['length' => 20],
        ],
        'ExpirationMonth'    => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 10],
        ],
        'ExpirationYear'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 10],
        ],
        'CVV2'               => [
            'access' => ['Edit', 'Add'],
            'type'   => 'String',
            'options' => ['length' => 10],
        ],
        'Status'             => [
            'access' => ['Read'],
            'type'   => 'MediumInteger'
        ],
        'CardType'           => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 50],
        ],
        'StartDateMonth'     => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 60],
        ],
        'StartDateYear'      => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 60],
        ],
        'MaestroIssueNumber' => [
            'access' => ['Edit', 'Add', 'Read'],
            'type'   => 'String',
            'options' => ['length' => 100],
        ],
    ];

}

