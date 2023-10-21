<?php

use app\classes\Cart;
use app\classes\CartProducts;

$cartProducts = new CartProducts;

$products = $cartProducts->products(new Cart);

// dd($products);
$layout->add('cart');