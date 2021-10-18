<?php 
namespace App\Models;


use PDO;

class Products
{
    private $connection;

    public function __construct()
    {
        $db = new DbConnect();
        $this->connection = $db->getConnection();
    }
	
	public function read()
	{
        $sth = $this->connection->prepare("SELECT supermarket.products.productName, 
                                   CONCAT(supermarket.users.firstName, ' ', supermarket.users.lastName) AS userСreated
                                   FROM supermarket.products 
                                   LEFT JOIN supermarket.users 
                                   ON supermarket.products.userСreatedId=supermarket.users.userId
                                   WHERE supermarket.users.userId  IS NOT NULL 
                                   ORDER BY supermarket.products.productName;");
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
	}
}
