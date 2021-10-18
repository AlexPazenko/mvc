<?php

namespace App\Controllers;

use App\Models\Customer;
use App\View\View;
use Symfony\Component\Routing\RouteCollection;

class CustomersController
{
    // Show the product attributes based on the id.
    public function showOrders(int $id, RouteCollection $routes)
    {
        $customer = new Customer();
        $orders = $customer->read($id);
        View::generate('customer-orders.php', $orders);
    }
}