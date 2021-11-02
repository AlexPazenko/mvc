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
        $products = (new Products)->read();
        View::generate('products.php', $products);

    }
}
