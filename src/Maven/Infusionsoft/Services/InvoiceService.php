<?php
namespace Maven\Infusionsoft\Services;

class InvoiceService extends BaseService
{

    /**
     *
     * General Add order with products and miscItems which
     * can be shipping or discounts products array
     * requires the following
     *
     * product['id']
     * product['description']
     * product['notes']
     * product['price']
     * product['qty']
     *
     * Misc requires the following
     * misc['typeId']
     * misc['amount']
     * misc['description']
     * misc['notes']
     *
     * @param int    $contactId
     * @param array  $products
     * @param string $orderTitle
     * @param int    $affiliateId
     * @param array  $miscItems
     *
     * @return int
     * @throws \Exception
     */
    public function addOrder($contactId, $products, $orderTitle = '', $affiliateId = 0, $miscItems = [])
	{
		$orderId = $this->SDK->blankOrder($contactId, $orderTitle, $this->currentTime(), $affiliateId, $affiliateId);
		if (!is_numeric($orderId) || $orderId <= 0) throw new \Exception('Unable to create new order: '.$orderId, 400);

		foreach ($products as $product)
        {
			$status = $this->SDK->addOrderItem($orderId, $product['id'], 4, (float) $product['price'], $product['qty'], $product['description'], isset($product['notes']) ? $product['notes'] : '');
			if (!$status) {
				$this->SDK->deleteInvoice($orderId);
				throw new \Exception('Problem when adding item to order: '.$status);
			}
		}

        foreach($miscItems as $item)
        {
            $status = $this->SDK->addOrderItem($orderId, 0, $item['typeId'], (float) $item['amount'], 1, $item['description'], isset($item['notes']) ? $item['notes'] : '');
            if (!$status) {
                $this->SDK->deleteInvoice($orderId);
                throw new \Exception('Problem when adding item to order: '.$status);
            }
        }

		return $orderId;
	}

    /**
     *
     * See addOrder method for details, this then charges the order
     * that was created.
     *
     * @param int    $contactId
     * @param array  $products
     * @param int    $creditCardId
     * @param int    $merchantAccountId
     * @param string $orderTitle
     * @param int    $affiliateId
     * @param array  $miscItems
     *
     * @return int
     * @throws \Exception
     */
    public function addAndChargeOrder($contactId, $products, $creditCardId, $merchantAccountId, $orderTitle = '', $affiliateId = 0, $miscItems = [])
	{
		$orderId = $this->addOrder($contactId, $products, $orderTitle, $affiliateId, $miscItems);
		if (!$orderId) throw new \Exception('Unable to create new order during addAndChargeOrder: '.$orderId);
		$chargeResponse = $this->SDK->chargeInvoice($orderId, $orderTitle, $creditCardId, $merchantAccountId, false);
		if (!$chargeResponse || !is_array($chargeResponse) || empty($chargeResponse)) throw new \Exception('Unexpected response when attempting to charge invoice id: '.$orderId);
		if ($chargeResponse['Successful'] != true) {
			throw new \Exception('Unable to charge payment on invoice: '.$chargeResponse['Message']);
		}

		return $orderId;
	}

    /**
     * @param int    $contactId
     * @param array  $products
     * @param int    $creditCardId
     * @param int    $merchantAccountId
     * @param int    $numberOfPayments
     * @param int    $daysBetween
     * @param string $orderNotes
     * @param int    $affiliateId
     *
     * @return int
     * @throws \Exception
     */

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