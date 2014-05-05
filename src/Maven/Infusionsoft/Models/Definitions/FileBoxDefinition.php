<?php
namespace Maven\Infusionsoft\Models\Definitions;

class FileBoxDefinition extends BaseDefinition
{

    public static $table = 'FileBox';
    public static $fields = array (
        'Id'        => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'FileName'  => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'Extension' => array (
            'access' => array ('Read'),
            'type'   => 'String'
        ),
        'FileSize'  => array (
            'access' => array ('Read'),
            'type'   => 'BigInteger'
        ),
        'ContactId' => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
        'Public'    => array (
            'access' => array ('Read'),
            'type'   => 'Integer'
        ),
    );

}

