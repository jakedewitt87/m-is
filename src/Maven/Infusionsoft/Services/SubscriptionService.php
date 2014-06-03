<?php namespace Maven\Infusionsoft\Services;

class SubscriptionService extends BaseService
{
	public function addAndChargeSubscription($contactId, $subscriptionPlanId, $subscriptionPrice, $creditCardId, $merchantAccountId, $orderNotes = '', $affiliateId = 0)
	{
		$subscriptionId = $this->SDK->addRecurringAdv($contactId,
			true,
			intval($subscriptionPlanId),
			1,
			(float) $subscriptionPrice,
			true,
			intval($merchantAccountId),
			intval($creditCardId),
			$affiliateId,
			0
		);
		if (!is_numeric($subscriptionId) || $subscriptionId <= 0)  throw new \Exception('Unable to create new subscription: '.$subscriptionId, 400);

		$invoiceId = $this->SDK->recurringInvoice($subscriptionId);
		if (!is_numeric($invoiceId) || $invoiceId <= 0) throw new \Exception('Unable to create new invoice for subscription: '.$invoiceId, 400);

		$chargeResponse = $this->SDK->chargeInvoice($invoiceId, $orderNotes, intval($creditCardId), intval($merchantAccountId), false);
		if (!$chargeResponse || !is_array($chargeResponse)) throw new \Exception('Unexpected response when attempting to charge invoice: '.$chargeResponse);
		if ($chargeResponse['Successful'] != true) throw new \Exception('Unable to charge payment on subscription: '.$chargeResponse['Message']);

		return $subscriptionId;
	}

	public function addSubscriptionWithInvoice($contactId, $subscriptionPlanId, $subscriptionPrice, $merchantAccountId, $creditCardId, $affiliateId = 0)
	{
		$subscriptionId = $this->SDK->addRecurringAdv($contactId,
			true,
			intval($subscriptionPlanId),
			1,
			(float) $subscriptionPrice,
			true,
			intval($merchantAccountId),
			intval($creditCardId),
			$affiliateId,
			0
		);
		if (!is_numeric($subscriptionId) || $subscriptionId <= 0)  throw new \Exception('Unable to create new subscription: '.$subscriptionId, 400);

		$invoiceId = $this->SDK->recurringInvoice($subscriptionId);
		if (!is_numeric($invoiceId) || $invoiceId <= 0) throw new \Exception('Unable to create new invoice for subscription: '.$invoiceId, 400);

		return $invoiceId;
	}
}