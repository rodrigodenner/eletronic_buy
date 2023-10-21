<?php

use app\classes\Cart;

$productsIncart = new Cart;
$productsIncart->clear();

header("location:/cart");