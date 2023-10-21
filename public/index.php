<?php
require"../bootstrap.php";
session_start();

use app\classes\Cart;
use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;
use app\models\Read;

// $products = require "../app/helpers/products.php";

$routes = [
    '/' => 'controllers/index',
    '/product' => 'controllers/product',
    '/cart' =>  'controllers/cart',
    '/add' => 'controllers/add',
    '/quantity' => 'controllers/quantity',
    '/remove' => 'controllers/remove',
    '/clear' => 'controllers/clear',
];

$uri = Uri::load();
$layout = new Layout;
$cart = new Cart;
$productsInCart = $cart->cart();
$read = new Read;
$products = $read->all('products');

require Routes::load($routes,$uri);
require $layout->master('layout');