<?php
namespace Maven\Infusionsoft\Services;

class SettingService extends BaseService {

    public function getCreditCards()
    {
        $ccList = $this->SDK->dsGetSetting('Order', 'optioncctypes');
        $ccList = explode(',', $ccList);
        $creditCards = [];
        foreach ( $ccList as $creditCard )
        {
            if ( ! empty($creditCard) )
            {
                $creditCards[] = $creditCard;
            }
        }

        return $creditCards;
    }

    public function getCreditCardsAsList()
    {
        $creditCards = $this->getCreditCards();

        return array_combine($creditCards, $creditCards);
    }

    public function getDefaultMerchant()
    {
        $merchantId = $this->SDK->dsGetSetting('Order', 'defaultmerchant');

        return empty($merchantId) ? null : intval($merchantId);
    }
}