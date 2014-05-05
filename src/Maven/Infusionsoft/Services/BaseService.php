<?php
namespace Maven\Infusionsoft\Services;

/**
 * Class BaseService
 *
 * @package MavenAPI\Infusionsoft\Services
 * @property \iSDK SDK
 */
class BaseService
{

	public function __construct(\iSDK $sdk)
	{
		$this->SDK = $sdk;
	}

}