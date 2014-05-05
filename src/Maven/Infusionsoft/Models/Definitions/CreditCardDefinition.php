<?php
namespace Maven\Infusionsoft\Models\Definitions;

class CreditCardDefinition extends BaseDefinition
{

    public static $table = 'CreditCard';
    public static $fields = array (
        'Id'                 => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'ContactId'          => array (
            'access' => array ('Add', 'Read'),
            'type'   => 'Integer'
        ),
        'BillName'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'FirstName'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'LastName'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'PhoneNumber'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'Email'              => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillAddress1'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillAddress2'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillCity'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillState'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillZip'            => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'BillCountry'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipFirstName'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipMiddleName'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipLastName'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipCompanyName'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipPhoneNumber'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipAddress1'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipAddress2'       => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipCity'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipState'          => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipZip'            => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipCountry'        => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ShipName'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'NameOnCard'         => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CardNumber'         => array (
            'access' => array ('Add'),
            'type'   => 'String'
        ),
        'Last4'              => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'ExpirationMonth'    => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'ExpirationYear'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'CVV2'               => array (
            'access' => array ('Edit', 'Add'),
            'type'   => 'String'
        ),
        'Status'             => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'CardType'           => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'StartDateMonth'     => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'StartDateYear'      => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
        'MaestroIssueNumber' => array (
            'access' => array ('Edit', 'Add', 'Read'),
            'type'   => 'String'
        ),
    );

}

