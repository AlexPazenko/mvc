<?php 
namespace App\Models;
use PDO;
class Products
{

	
	public static function read()
	{

        $db = new DbConnect();
        $db = $db->getConnection();
        $sth = $db->prepare("SELECT supermarket.products.productName, 
                                   CONCAT(supermarket.users.firstName, ' ', supermarket.users.lastName) AS userСreated
                                   FROM supermarket.products 
                                   LEFT JOIN supermarket.users 
                                   ON supermarket.products.userСreatedId=supermarket.users.userId
                                   WHERE supermarket.users.userId  IS NOT NULL 
                                   ORDER BY supermarket.products.productName;");
        $sth->execute();
        $products = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $products;
	}
}