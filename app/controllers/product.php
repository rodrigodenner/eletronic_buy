<?php

use app\models\Read;

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$product = (new Read)->find($id,'products');

// dd($product);

$layout->add('product');