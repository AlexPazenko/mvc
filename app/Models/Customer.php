<?php
namespace App\Models;


use PDO;

class Customer extends DbConnector
{
    public function __construct()
    {
        parent::__construct();
    }
    public function read(int $id)
    {
        $sth = $this->connection->prepare("SELECT supermarket.orders.orderId, supermarket.products.productName, supermarket.products.productPrice,
                                    supermarket.OrderItems.amount
                                    FROM supermarket.orders 
                                    INNER JOIN supermarket.OrderItems 
                                    ON supermarket.OrderItems.orderItemId=supermarket.orders.orderItem
                                    INNER JOIN supermarket.products 
                                    ON supermarket.OrderItems.product = supermarket.products.productId
                                    INNER JOIN supermarket.customersOrders 
                                    ON supermarket.orders.orderId=supermarket.customersOrders.orderId
                                    INNER JOIN supermarket.customers
                                    ON supermarket.customersOrders.customerId=supermarket.customers.customerId
                                    AND supermarket.customers.customerId = " . $id . " ");
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}

