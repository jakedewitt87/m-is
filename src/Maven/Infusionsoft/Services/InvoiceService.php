<?php
namespace Maven\Infusionsoft\Services;

class InvoiceService extends BaseService
{
	public function addAndChargeOrder($contactId, $products, $creditCardId, $merchantAccountId, $orderNotes = '')
	{
		$orderId = $this->SDK->blankOrder($contactId, $orderNotes, $this->currentTime(), 0, 0);
		if (!is_numeric($orderId) || $orderId <= 0) throw new \Exception('Unable to create new order: '.$orderId, 400);

		foreach ($products as $product) {
			$status = $this->SDK->addOrderItem($orderId, $product['id'], 4, (float) $product['price'], $product['qty'], $product['description'], $orderNotes);
			if (!$status) {
				$this->SDK->deleteInvoice($orderId);
				throw new \Exception('Problem when adding item to order: '.$status);
			}
		}

		$chargeResponse = $this->SDK->chargeInvoice($orderId, $orderNotes, $creditCardId, $merchantAccountId, false);
		if (!$chargeResponse || !is_array($chargeResponse)) throw new \Exception('Unexpected response when attempting to charge invoice: '.$chargeResponse);
		if ($chargeResponse['Successful'] != true) {
			throw new \Exception('Unable to charge payment on invoice: '.$chargeResponse['Message']);
		}

		return $orderId;
	}
}