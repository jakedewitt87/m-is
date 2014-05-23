<?php
namespace Maven\Infusionsoft;

/**
 * Class Infusionsoft
 *
 * @package \Maven\Infusionsoft
 * @property \iSDK SDK
 * @property \Maven\Infusionsoft\Services\FieldService FieldService
 * @property \Maven\Infusionsoft\Services\SubscriptionService SubscriptionService
 * @property \Maven\Infusionsoft\Services\TableService TableService
 * @property \Maven\Infusionsoft\Models\ActionSequence ActionSequence
 * @property \Maven\Infusionsoft\Models\Affiliate Affiliate
 * @property \Maven\Infusionsoft\Models\AffResource AffResource
 * @property \Maven\Infusionsoft\Models\Campaign Campaign
 * @property \Maven\Infusionsoft\Models\Campaignee Campaignee
 * @property \Maven\Infusionsoft\Models\CampaignStep CampaignStep
 * @property \Maven\Infusionsoft\Models\CCharge CCharge
 * @property \Maven\Infusionsoft\Models\Company Company
 * @property \Maven\Infusionsoft\Models\Contact Contact
 * @property \Maven\Infusionsoft\Models\ContactAction ContactAction
 * @property \Maven\Infusionsoft\Models\ContactGroup ContactGroup
 * @property \Maven\Infusionsoft\Models\ContactGroupAssign ContactGroupAssign
 * @property \Maven\Infusionsoft\Models\ContactGroupCategory ContactGroupCategory
 * @property \Maven\Infusionsoft\Models\CProgram CProgram
 * @property \Maven\Infusionsoft\Models\CreditCard CreditCard
 * @property \Maven\Infusionsoft\Models\DataFormField DataFormField
 * @property \Maven\Infusionsoft\Models\DataFormGroup DataFormGroup
 * @property \Maven\Infusionsoft\Models\DataFormTab DataFormTab
 * @property \Maven\Infusionsoft\Models\Expense Expense
 * @property \Maven\Infusionsoft\Models\FileBox FileBox
 * @property \Maven\Infusionsoft\Models\GroupAssign GroupAssign
 * @property \Maven\Infusionsoft\Models\Invoice Invoice
 * @property \Maven\Infusionsoft\Models\InvoiceItem InvoiceItem
 * @property \Maven\Infusionsoft\Models\InvoicePayment InvoicePayment
 * @property \Maven\Infusionsoft\Models\Job Job
 * @property \Maven\Infusionsoft\Models\JobRecurringInstance JobRecurringInstance
 * @property \Maven\Infusionsoft\Models\Lead Lead
 * @property \Maven\Infusionsoft\Models\LeadSource LeadSource
 * @property \Maven\Infusionsoft\Models\LeadSourceCategory LeadSourceCategory
 * @property \Maven\Infusionsoft\Models\LeadSourceExpense LeadSourceExpense
 * @property \Maven\Infusionsoft\Models\LeadSourceRecurringExpense LeadSourceRecurringExpense
 * @property \Maven\Infusionsoft\Models\MtgLead MtgLead
 * @property \Maven\Infusionsoft\Models\OrderItem OrderItem
 * @property \Maven\Infusionsoft\Models\Payment Payment
 * @property \Maven\Infusionsoft\Models\PayPlan PayPlan
 * @property \Maven\Infusionsoft\Models\PayPlanItem PayPlanItem
 * @property \Maven\Infusionsoft\Models\Product Product
 * @property \Maven\Infusionsoft\Models\ProductCategory ProductCategory
 * @property \Maven\Infusionsoft\Models\ProductCategoryAssign ProductCategoryAssign
 * @property \Maven\Infusionsoft\Models\ProductInterest ProductInterest
 * @property \Maven\Infusionsoft\Models\ProductInterestBundle ProductInterestBundle
 * @property \Maven\Infusionsoft\Models\ProductOption ProductOption
 * @property \Maven\Infusionsoft\Models\ProductOptValue ProductOptValue
 * @property \Maven\Infusionsoft\Models\RecurringOrder RecurringOrder
 * @property \Maven\Infusionsoft\Models\RecurringOrderWithContact RecurringOrderWithContact
 * @property \Maven\Infusionsoft\Models\Referral Referral
 * @property \Maven\Infusionsoft\Models\SavedFilter SavedFilter
 * @property \Maven\Infusionsoft\Models\Stage Stage
 * @property \Maven\Infusionsoft\Models\StageMove StageMove
 * @property \Maven\Infusionsoft\Models\Status Status
 * @property \Maven\Infusionsoft\Models\SubscriptionPlan SubscriptionPlan
 * @property \Maven\Infusionsoft\Models\Template Template
 * @property \Maven\Infusionsoft\Models\Ticket Ticket
 * @property \Maven\Infusionsoft\Models\TicketStage TicketStage
 * @property \Maven\Infusionsoft\Models\TicketType TicketType
 * @property \Maven\Infusionsoft\Models\User User
 * @property \Maven\Infusionsoft\Models\UserGroup UserGroup
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

	public function infusionDateTime($time = 'now', $timezone = 'America/New_York')
	{
		return (new \DateTime($time, new \DateTimeZone($timezone)))->format('Ymd\TH:i:s');
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