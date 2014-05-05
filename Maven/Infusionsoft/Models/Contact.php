<?php
namespace Maven\Infusionsoft\Models;

use Maven\Infusionsoft\Exceptions\InfusionsoftException;

class Contact extends BaseModel
{
    public static $table = 'Contact';
	public static $fieldMap = [
		'Id' => 'infusionsoft_contact_id',
		'FirstName' => ['first_name', 'firstName'],
		'LastName' => ['last_name', 'lastName'],
		'Email' => 'email',
		'Phone1' => 'phone',
		'StreetAddress1' => ['address', 'address1'],
		'StreetAddress2' => 'address2',
		'City' => 'city',
		'State' => 'state',
		'PostalCode' => ['zip', 'zipcode'],
		'Country' => 'country',
		'Website' => ['website', 'website_url'],
		'JobTitle' => 'job_title',
	];

    /**
     * @param array $userArray
     *
     * @return array|bool|null
     * @throws \Maven\Infusionsoft\Exceptions\InfusionsoftException
     */
    public function getFirstByArray($userArray)
    {
		$contact = null;
		if (!empty($userArray['Id'])) {
			$contact = $this->SDK->dsQuery('Contact', 1, 0, array('Id' => $userArray['Id']), $this->getReadFields());
		} elseif (!empty($userArray['Email'])) {
			$contact = $this->SDK->dsQuery('Contact', 1, 0, array('Email' => $userArray['Email']), $this->getReadFields());
		}

        //Return Contact Or false if none found, otherwise throw
        if (!empty($contact) && is_array($contact)) {
            return $contact[0];
        } elseif (empty($contact)) {
            return false;
        }

        throw new InfusionsoftException('Failed on getFirstByArray');
    }

    /**
     * @param array $contactData
     * @param int   $contactId
     *
     * @return array
     * @throws \Maven\Infusionsoft\Exceptions\InfusionsoftException
     */
    public function addOrUpdateContact($contactData, $contactId = 0)
    {
		if (is_array($contactId)) $contactId = empty($contactId['Id']) ? 0 : $contactId['Id']; // Attempt to find an ID from a contact array
		if (!is_numeric($contactId)) $contactId = 0; // Default to zero
		$contactData = $this->getFilteredArray($contactData, $this->getEditFields()); // Remove any fields from their input that are not editable
		$newContactId = $contactId ? $this->SDK->updateCon($contactId, $contactData) : $this->SDK->addCon($contactData);
        if (is_int($newContactId)) {
            $contactData['Id'] = $newContactId;

            return $contactData;
        }

        throw new InfusionsoftException('Failed to add or update Contact');
    }
}

