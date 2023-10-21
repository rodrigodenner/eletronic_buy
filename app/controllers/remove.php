<?php

use app\classes\Cart;

// dd($_GET);

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

(new Cart)->remove($id);

header('location: /cart');
