<?php
namespace Maven\Infusionsoft\Models;

class Product extends BaseModel
{

    public static $table = 'Product';

	public function getAllAsList($detailed = true)
	{
		$products = $this->get(['Id' => '%']);
		if (!is_array($products)) {
			throw new \Exception('Unexpected response from all products query: '.$products);
		}
		$productList = [];
		foreach ($products as $product) {
			if ($detailed) {
				$productList[$product['Id']] = "{$product['ProductName']} (ID: {$product['Id']} - $".number_format($product['ProductPrice'], 2, '.', ',').")";
			} else {
				$productList[$product['Id']] = $product['ProductName'];
			}
		}
		return $productList;
	}

	public function getPrice($productId)
	{
		$infProduct = $this->SDK->dsQuery('Product', 1, 0, ['Id' => $productId], ['Id', 'ProductPrice']);
		if (!is_array($infProduct)) throw new \Exception('Unexpected response when querying for product: '.$infProduct);
		if (!$infProduct) return 0.00;
		return number_format($infProduct[0]['ProductPrice'], 2, '.', '');
	}

}

