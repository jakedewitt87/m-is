<?php
namespace Maven\Infusionsoft\Services;

class InvoiceService extends BaseService
{
	public function addOrder($contactId, $products, $orderNotes = '', $affiliateId = 0)
	{
		$orderId = $this->SDK->blankOrder($contactId, $orderNotes, $this->currentTime(), $affiliateId, $affiliateId);
		if (!is_numeric($orderId) || $orderId <= 0) throw new \Exception('Unable to create new order: '.$orderId, 400);

		foreach ($products as $product) {
			$status = $this->SDK->addOrderItem($orderId, $product['id'], 4, (float) $product['price'], $product['qty'], $product['description'], $orderNotes);
			if (!$status) {
				$this->SDK->deleteInvoice($orderId);
				throw new \Exception('Problem when adding item to order: '.$status);
			}
		}

		return $orderId;
	}

	public function addAndChargeOrder($contactId, $products, $creditCardId, $merchantAccountId, $orderNotes = '', $affiliateId = 0)
	{
		$orderId = $this->addOrder($contactId, $products, $orderNotes, $affiliateId);
		if (!$orderId) throw new \Exception('Unable to create new order during addAndChargeOrder: '.$orderId);
		$chargeResponse = $this->SDK->chargeInvoice($orderId, $orderNotes, $creditCardId, $merchantAccountId, false);
		if (!$chargeResponse || !is_array($chargeResponse)) throw new \Exception('Unexpected response when attempting to charge invoice: '.$chargeResponse);
		if ($chargeResponse['Successful'] != true) {
			throw new \Exception('Unable to charge payment on invoice: '.$chargeResponse['Message']);
		}

		return $orderId;
	}

	public function addAndChargePaymentPlan($contactId, $products, $creditCardId, $merchantAccountId, $numberOfPayments = 1, $daysBetween = 30, $orderNotes = '', $affiliateId = 0)
	{
		$defaultMaxRetry = $this->SDK->dsGetSetting('Order', 'defaultmaxretry');
		$defaultDays = $this->SDK->dsGetSetting('Order', 'defaultnumdaysbetween');

		$orderId = $this->addOrder($contactId, $products, $orderNotes, $affiliateId);
		if (!$orderId) throw new \Exception('Unable to create new order during addAndChargeOrder: '.$orderId);
		$added = $this->SDK->payPlan($orderId, true, $creditCardId, $merchantAccountId, intval($defaultMaxRetry), intval($defaultDays), (float) 0, $this->currentTime(), $this->currentTime(), $numberOfPayments, $daysBetween);
		if (!$added) throw new \Exception('Unable to add payment plan to invoice '.$orderId.': '.$added);

		$chargeResponse = $this->SDK->chargeInvoice($orderId, $orderNotes, $creditCardId, $merchantAccountId, false);
		if (!$chargeResponse || !is_array($chargeResponse)) throw new \Exception('Unexpected response when attempting to charge invoice: '.$chargeResponse);
		if ($chargeResponse['Successful'] != true) {
			throw new \Exception('Unable to charge payment on invoice: '.$chargeResponse['Message']);
		}

		return $orderId;
	}


    /**
     * @param       $invoiceId
     * @param array $jobData
     *
     * @return array
     * @throws \Exception
     */
    public function updateJobByInvoiceId($invoiceId, $jobData = [])
    {
        $invoice = $this->SDK->dsLoad('Invoice', $invoiceId, ['JobId']);
        if(!isset($invoice['JobId'])) throw new \Exception('Error updating order');

        $jobId = $this->SDK->dsUpdate('Job', $invoice['JobId'], $jobData);
        $jobData['Id'] = $jobId;

        return $jobData;
    }



}