<?php
namespace Maven\Infusionsoft;

/**
 * Class Infusionsoft
 *
 * @package Maven\Infusionsoft
 * @property \iSDK SDK
 * @property \Maven\Infusionsoft\Services\FieldService FieldService
 * @property \Maven\Infusionsoft\Services\SubscriptionService SubscriptionService
 * @property \Maven\Infusionsoft\Services\TableService TableService
 * @property \Maven\Infusionsoft\Models\Contact Contact
 * @property \Maven\Infusionsoft\Models\CreditCard CreditCard
 * @property \Maven\Infusionsoft\Models\RecurringOrder RecurringOrder
 */
class Infusionsoft
{

	protected $_sdk;
	protected $appName;
	protected $apiKey;
	public $connected = false;

	public function __construct($appName = '', $apiKey = '')
	{
		if (!empty($appName) && !empty($apiKey)) $this->setConnection($appName, $apiKey);
	}

	/**
	 * Set the connection of the app and return the sdk.
	 *
	 * @param $appName
	 * @param $apiKey
	 *
	 * @throws \Exception Thrown when the connection fails.  Known to hang on malformed app names.
	 * @return $this
	 */
	public function setConnection($appName = '', $apiKey = '')
	{
		$this->appName = !empty($appName) ? $appName : $this->appName;
		$this->apiKey = !empty($apiKey) ? $apiKey : $this->apiKey;
		if (!empty($this->appName) && !empty($this->apiKey)) {
			try {
				$this->SDK->cfgCon($this->appName, $this->apiKey);
				$this->connected = true;
			} catch (\iSDKException $e) {
				$this->connected = false;
				throw new \Exception($e->getMessage());
			}
		}

		return $this;
	}

	public function testConnection($appName, $apiKey)
	{
		try {
			(new \iSDK())->cfgCon($appName, $apiKey);
			return true;
		} catch (\iSDKException $e) {
			return false;
		}
	}

	/**
	 * Get the SDK
	 *
	 * @return \iSDK
	 */
	protected function getSDK()
	{
		$this->_sdk = $this->_sdk ? : new \iSDK();
		return $this->_sdk;
	}

	public function __get($attrName)
	{
		if ($attrName === 'SDK') return $this->getSDK();
		$directory = strpos($attrName, 'Service') !== false ? 'Maven\\Infusionsoft\\Services\\' : 'Maven\\Infusionsoft\\Models\\';
		$className = $directory.$attrName;
		if (class_exists($className)) {
			return new $className($this->SDK);
		}

		throw new \Exception('Unable to find class', 500);
	}


}