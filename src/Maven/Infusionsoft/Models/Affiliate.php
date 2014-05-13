<?php
namespace Maven\Infusionsoft\Models;

class Affiliate extends BaseModel
{

    public static $table = 'Affiliate';

	public function findByCode($affiliateCode)
	{
		$affiliate = $this->SDK->dsQuery($this::$table, 1, 0, ['AffCode' => $affiliateCode], $this->getReadFields());
		if (!is_array($affiliate)) throw new \Exception('Unexpected response when querying for affiliate by code: '.$affiliate);
		return $affiliate ? $affiliate[0] : [];
	}

}

