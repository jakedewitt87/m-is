<?php
namespace Maven\Infusionsoft\Models\Definitions;

class MtgLeadDefinition extends BaseDefinition
{

    public static $table = 'MtgLead';
    public static $fields = array (
        'Id'                    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'DateAppraisalOrdered'  => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'DateAppraisalDone'     => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'DateAppraisalReceived' => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'DateTitleOrdered'      => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'DateTitleReceived'     => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'DateRateLocked'        => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'DateRateLockExpires'   => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'CreditReportDate'      => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'ApplicationDate'       => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'ActualCloseDate'       => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
        'FundingDate'           => array (
            'access' => array ('Read'),
            'type'   => 'DateTime'
        ),
    );

}

