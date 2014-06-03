<?php
namespace Maven\Infusionsoft\Models;

class SubscriptionPlan extends BaseModel
{

    public static $table = 'SubscriptionPlan';

	public $subscriptionCycles = [
		'1' => 'Year',
		'2' => 'Month',
		'3' => 'Week',
		'6' => 'Day',
	];

	public function getAllAsList()
	{
		$subscriptions = $this->get(['Id' => '%']);
		if (!is_array($subscriptions)) throw new \Exception('Unexpected response when attempting to find all subscriptions: '.$subscriptions);
		$products = $this->get(['Id' => '%'], 'Product', ['Id', 'ProductName']);
		if (!is_array($products)) throw new \Exception('Unexpected response when attempting to find all products: '.$products);
		$products = $this->getIdArray($products);
		$subscriptonList = [];
		foreach ($subscriptions as $subscription) {
			$existingProduct = $products[$subscription['ProductId']];
			$selectedCycle = strtolower($this->subscriptionCycles[$subscription['Cycle']]);
			$lengthTag = $subscription['Frequency'] == 1 ? $selectedCycle : $subscription['Frequency'].' '.$selectedCycle.'s';
			$subscriptonList[$subscription['Id']] = "{$existingProduct['ProductName']} - $".number_format($subscription['PlanPrice'], 2, '.', '')." billed every $lengthTag";
		}

		return $subscriptonList;
	}

}

