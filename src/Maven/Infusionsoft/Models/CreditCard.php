<?php namespace Maven\Infusionsoft\Models;

use Exception;

/**
 * Class CreditCard
 *
 * @package Maven\Infusionsoft\Models
 */
class CreditCard extends BaseModel {

    /**
     * @var string
     */
    public static $table = 'CreditCard';

    /**
     * @var array
     */
    public static $fieldMap = [
        'ContactId'       => ['ContactId', 'infusionsoft_contact_id'],
        'BillName'        => ['card_name', 'billing_name_on_card'],
        'FirstName'       => 'first_name',
        'LastName'        => 'last_name',
        'Email'           => 'email',
        'PhoneNumber'     => 'phone',
        'BillAddress1'    => ['address', 'address1', 'StreetAddress1'],
        'BillAddress2'    => ['address2', 'StreetAddress2'],
        'BillCity'        => ['city', 'City'],
        'BillState'       => ['state', 'State'],
        'BillZip'         => ['card_zipcode', 'zip', 'zipcode', 'billing_zip', 'PostalCode'],
        'BillCountry'     => ['country', 'Country'],
        'NameOnCard'      => ['card_name', 'billing_name_on_card'],
        'CardNumber'      => ['card_number', 'billing_card_number'],
        'ExpirationMonth' => ['card_month', 'billing_card_month', 'card_expiration_month'],
        'ExpirationYear'  => ['card_year', 'billing_card_year', 'card_expiration_year'],
        'CVV2'            => ['card_cvv2', 'billing_card_cvv2'],
        'CardType'        => ['card_type', 'billing_card_type'],
    ];

    /**
     * @param $contactId
     * @param $userInput
     *
     * @return array
     * @throws Exception
     */
    public function validateAndAddCreditCard($contactId, $userInput)
    {
        $validationResponse = $this->SDK->validateCard($this->getFilteredArray($userInput, $this->getAddFields()));
        if (! $validationResponse || ! is_array($validationResponse)) throw new Exception('Bad response from CRM when validating credit card: ' . $validationResponse, 400);
        if ($validationResponse['Valid'] !== 'true') throw new Exception('Unfortunately it looks like your credit card number is not correct.');

        return $this->getOrAddCreditCard($contactId, $userInput);
    }

    /**
     * @param $contactId
     * @param $creditCardData
     *
     * @return array
     * @throws Exception
     */
    public function getOrAddCreditCard($contactId, $creditCardData)
    {
        $creditCardData['ContactId'] = $contactId; // Add ContactID to CC Data
        $insertArray = $this->getFilteredArray($creditCardData, $this->getAddFields()); // Get proper array for insertion
        $cardLast4 = substr($insertArray['CardNumber'], - 4);
        if (strlen($cardLast4) < 4) throw new Exception('Unable to find credit card number in data', 400);
        $existingCardId = $this->SDK->locateCard($contactId, $cardLast4);
        if ($existingCardId)
        {
            $insertArray = $this->getFilteredArray($creditCardData, $this->getEditFields());
            $creditCardId = $this->SDK->dsUpdate('CreditCard', $existingCardId, $insertArray);
        }
        else
        {
            $creditCardId = $this->SDK->dsAdd('CreditCard', $insertArray);
        }
        if (! is_numeric($creditCardId)) throw new Exception('Unable to update or add credit card: ' . $creditCardId, 400);

        return ['Id' => $creditCardId] + $insertArray;
    }

    /**
     * @param $contactId
     *
     * @return array
     * @throws Exception
     */
    public function getNewestByContact($contactId)
    {
        $creditCard = $this->SDK->dsQueryOrderBy($this::$table, 1, 0, ['ContactId' => $contactId, 'Status' => 3], $this->getReadFields(), 'Id', false);
        if (! is_array($creditCard))
        {
            throw new Exception('Unexpected response when attempting to find most recent credit card for contact ' . $contactId . ': ' . $creditCard);
        }

        return $creditCard ? $creditCard[0] : [];
    }

    /**
     * @param $creditCardId
     * @param $creditCardData
     *
     * @return mixed
     * @throws Exception
     */
    public function updateAndValidateCard($creditCardId, $creditCardData)
    {
        $insertArray = $this->getFilteredArray($creditCardData, $this->getEditFields());

        $creditCardId = $this->SDK->dsUpdate('CreditCard', $creditCardId, $insertArray);

        $validationResponse = $this->SDK->validateCard($creditCardId);
        if (! $validationResponse || ! is_array($validationResponse))
        {
            throw new Exception('Error when validating credit card: ' . $validationResponse, 400);
        }

        if ($validationResponse['Valid'] !== 'true')
        {
            throw new Exception('Credit card validation failed: ' . $validationResponse['Message']);
        }

        $creditCardData = $this->find($creditCardId);

        return $creditCardData;
    }

}

