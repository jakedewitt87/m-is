<?php
namespace Maven\Infusionsoft\Services;

/**
 * Class BaseService
 *
 * @package MavenAPI\Infusionsoft\Services
 * @property \iSDK SDK
 */
class BaseService {

    public function __construct(\iSDK $sdk)
    {
        $this->SDK = $sdk;
    }

    public function currentTime($timezone = 'America/New_York')
    {
        $currentTime = new \DateTime('now', new \DateTimeZone($timezone));

        return $currentTime->format('Ymd\TH:i:s');
    }

}