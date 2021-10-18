<?php

namespace App\Controllers;

use App\Models\Products;
use Symfony\Component\Routing\RouteCollection;
use App\View\View;
class ProductsController
{
    // Show all products.
    public function showProducts()
    {
        $products = Products::read();
        View::generate('products.php', $products);

        /*require_once APP_ROOT . '/views/products.php';*/
    }
}