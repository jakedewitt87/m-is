<?php
namespace Maven\Infusionsoft\Models;

class SubscriptionPlan extends BaseModel {

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
        if ( !is_array($subscriptions) ) throw new \Exception('Unexpected response when attempting to find all subscriptions: ' . $subscriptions);
        $products = $this->get(['Id' => '%'], 'Product', ['Id', 'ProductName']);
        if ( !is_array($products) ) throw new \Exception('Unexpected response when attempting to find all products: ' . $products);
        $products = $this->getIdArray($products);
        $subscriptionList = [];
        foreach ( $subscriptions as $subscription )
        {
            $subscriptionList = $this->subscriptionName($products, $subscription, $subscriptionList);
        }

        return $subscriptionList;
    }

    /**
     * @param $products
     * @param $subscription
     * @param $subscriptionList
     *
     * @return mixed
     */
    protected function subscriptionName($products, $subscription, $subscriptionList)
    {
        $existingProduct = $products[$subscription['ProductId']];
        $selectedCycle = strtolower($this->subscriptionCycles[$subscription['Cycle']]);
        $lengthTag = $subscription['Frequency'] == 1 ? $selectedCycle : $subscription['Frequency'] . ' ' . $selectedCycle . 's';
        $subscriptionList[$subscription['Id']] = "{$existingProduct['ProductName']} - $";
        $planPrice = isset($subscription['PlanPrice']) ? $subscription['PlanPrice'] : 0;
        $subscriptionList[$subscription['Id']] .= number_format($planPrice, 2, '.', '');
        $subscriptionList[$subscription['Id']] .= " billed every $lengthTag";

        return $subscriptionList;
    }

}

