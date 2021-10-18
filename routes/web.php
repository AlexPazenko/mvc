<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
/*$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));*/

$routes->add('users', new Route(constant('URL_SUBFOLDER') . '/users', array('controller' => 'UsersController', 'method'=>'showUsers'), array()));
$routes->add('products', new Route(constant('URL_SUBFOLDER') . '/products', array('controller' => 'ProductsController', 'method'=>'showProducts'), array()));
$routes->add('customers-orders', new Route(constant('URL_SUBFOLDER') . '/customers-orders?id={id}', array('controller' => 'CustomersController', 'method'=>'showOrders'), array('id' => '[0-9]+')));