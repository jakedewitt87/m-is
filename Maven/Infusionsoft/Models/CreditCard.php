<?php
namespace Maven\Infusionsoft\Models;

class CreditCard extends BaseModel
{

    public static $table = 'CreditCard';

	public static $fieldMap = [
		'ContactId' => ['ContactId', 'infusionsoft_contact_id'],
		'BillName' => ['card_name', 'billing_name_on_card'],
		'FirstName' => 'first_name',
		'LastName' => 'last_name',
		'Email' => 'email',
		'PhoneNumber' => 'phone',
		'BillAddress1' => ['address', 'address1'],
		'BillAddress2' => 'address2',
		'BillCity' => 'city',
		'BillState' => 'state',
		'BillZip' => ['card_zipcode', 'zip', 'zipcode'],
		'BillCountry' => 'country',
		'NameOnCard' => ['card_name', 'billing_name_on_card'],
		'CardNumber' => ['card_number', 'billing_card_number'],
		'ExpirationMonth' => ['card_month', 'billing_card_month'],
		'ExpirationYear' => ['card_year', 'billing_card_year'],
		'CVV2' => ['card_cvv2', 'billing_card_cvv2'],
		'CardType' => ['card_type', 'billing_card_type'],
	];

	public function validateAndAddCreditCard($contactId, $userInput)
	{
		$creditCardArray = $this->getInfusionsoftArray($userInput);
		$validationResponse = $this->SDK->validateCard($this->getFilteredArray($creditCardArray, $this->getAddFields()));
		if (!$validationResponse || !is_array($validationResponse)) throw new \Exception('Bad response from CRM when validating credit card: '.$validationResponse, 400);
		if ($validationResponse['Valid'] !== 'true') throw new \Exception('Credit card validation failed: '.$validationResponse['Message']);

		$creditCardId = $this->getOrAddCreditCard($contactId, $userInput);
		return $creditCardId;
	}

	public function getOrAddCreditCard($contactId, $creditCardData)
	{
		$creditCardData['ContactId'] = $contactId; // Add ContactID to CC Data
		$creditCardArray = $this->getInfusionsoftArray($creditCardData);
		$insertArray = $this->getFilteredArray($creditCardArray, $this->getAddFields()); // Get proper array for insertion
		$cardLast4 = substr($insertArray['CardNumber'], -4);
		if (strlen($cardLast4) < 4) throw new \Exception('Unable to find credit card number in data', 400);
		$existingCardId = $this->SDK->locateCard($contactId, $cardLast4);
		if ($existingCardId) {
			$creditCardId = $this->SDK->dsUpdate('CreditCard', $existingCardId, $this->getFilteredArray($creditCardArray, $this->getEditFields()));
		} else {
			$creditCardId = $this->SDK->dsAdd('CreditCard', $insertArray);
		}
		if (!is_numeric($creditCardId)) throw new \Exception('Unable to update or add credit card: '.$creditCardId, 400);
		return $creditCardId;
	}

}

