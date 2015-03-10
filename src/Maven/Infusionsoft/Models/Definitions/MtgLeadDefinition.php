<?php
namespace Maven\Infusionsoft\Models\Definitions;

class MtgLeadDefinition extends BaseDefinition
{

    public static $table = 'MtgLead';
    public static $fields = [
        'Id'                    => [
            'access' => ['Read'],
            'type'   => 'Integer',
            'options' => ['primary', 'unsigned']

        ],
        'DateAppraisalOrdered'  => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'DateAppraisalDone'     => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'DateAppraisalReceived' => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'DateTitleOrdered'      => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'DateTitleReceived'     => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'DateRateLocked'        => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'DateRateLockExpires'   => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'CreditReportDate'      => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'ApplicationDate'       => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'ActualCloseDate'       => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
        'FundingDate'           => [
            'access' => ['Read'],
            'type'   => 'DateTime'
        ],
    ];

}

