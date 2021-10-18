<?php
namespace App\Models;
use PDO;
class Customer
{

    public function read(int $id)
    {

        $db = new DbConnect();
        $db = $db->getConnection();
        $sth = $db->prepare("SELECT supermarket.orders.orderId, supermarket.products.productName, supermarket.products.productPrice,
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
        $orders = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $orders;
    }
}