<?php namespace Maven\Infusionsoft\Services;

use Exception;

/**
 * Class SubscriptionService
 *
 * @package Maven\Infusionsoft\Services
 */
class SubscriptionService extends BaseService {

    /**
     * @param        $contactId
     * @param        $subscriptionPlanId
     * @param        $subscriptionPrice
     * @param        $creditCardId
     * @param        $merchantAccountId
     * @param string $orderNotes
     * @param int    $affiliateId
     * @param bool   $deleteFailedInvoice
     *
     * @return mixed
     * @throws Exception
     */
    public function addAndChargeSubscription($contactId, $subscriptionPlanId, $subscriptionPrice, $creditCardId, $merchantAccountId, $orderNotes = '', $affiliateId = 0, $deleteFailedInvoice = false)
    {
        $subscriptionId = $this->SDK->addRecurringAdv($contactId,
            true,
            intval($subscriptionPlanId),
            1,
            (float)$subscriptionPrice,
            true,
            intval($merchantAccountId),
            intval($creditCardId),
            $affiliateId,
            0
        );
        if ( ! is_numeric($subscriptionId) || $subscriptionId <= 0 ) throw new Exception('Unable to create new subscription: ' . $subscriptionId, 400);

        $invoiceId = $this->SDK->recurringInvoice($subscriptionId);
        if ( ! is_numeric($invoiceId) || $invoiceId <= 0 ) throw new Exception('Unable to create new invoice for subscription: ' . $invoiceId, 400);

        $chargeResponse = $this->SDK->chargeInvoice($invoiceId, $orderNotes, intval($creditCardId), intval($merchantAccountId), false);
        if ( ! $chargeResponse || ! is_array($chargeResponse) )
        {
            if ($deleteFailedInvoice) $this->deleteSubscriptionAndInvoice($subscriptionId, $invoiceId);

            throw new Exception('Unexpected response when attempting to charge invoice: ' . $chargeResponse);
        }
        if ( $chargeResponse['Successful'] != true )
        {
            if ($deleteFailedInvoice) $this->deleteSubscriptionAndInvoice($subscriptionId, $invoiceId);

            throw new Exception('Unable to charge payment on subscription: ' . $chargeResponse['Message']);
        }

        return $subscriptionId;
    }

    /**
     * @param null $subscriptionId
     * @param null $invoiceId
     *
     * @return bool
     */
    public function deleteSubscriptionAndInvoice($subscriptionId = null, $invoiceId = null)
    {
        if ( $subscriptionId ) $this->SDK->deleteSubscription($subscriptionId);

        if ( $invoiceId ) $this->SDK->deleteInvoice($invoiceId);

        return true;
    }

    /**
     * @param     $contactId
     * @param     $subscriptionPlanId
     * @param     $subscriptionPrice
     * @param     $merchantAccountId
     * @param     $creditCardId
     * @param int $affiliateId
     *
     * @return mixed
     * @throws Exception
     */
    public function addSubscriptionWithInvoice($contactId, $subscriptionPlanId, $subscriptionPrice, $merchantAccountId, $creditCardId, $affiliateId = 0)
    {
        $subscriptionId = $this->SDK->addRecurringAdv($contactId,
            true,
            intval($subscriptionPlanId),
            1,
            (float)$subscriptionPrice,
            true,
            intval($merchantAccountId),
            intval($creditCardId),
            $affiliateId,
            0
        );
        if ( ! is_numeric($subscriptionId) || $subscriptionId <= 0 ) throw new Exception('Unable to create new subscription: ' . $subscriptionId, 400);

        $invoiceId = $this->SDK->recurringInvoice($subscriptionId);
        if ( ! is_numeric($invoiceId) || $invoiceId <= 0 ) throw new Exception('Unable to create new invoice for subscription: ' . $invoiceId, 400);

        return $invoiceId;
    }
}