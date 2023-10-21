<?php

namespace app\classes;

use app\interfaces\CartInterface;
use app\models\Read as ModelsRead;

class CartProducts
{
    public function products(CartInterface $cartInterface)
    {
        
        $productsInCart = $cartInterface->cart();

        $productsInDataBase = (new ModelsRead)->all('products'); 
        $products = [];
        $total = 0;
       
        foreach ($productsInCart as $productId => $quantity) {
         
            $product = [...array_filter($productsInDataBase, fn($product) => (int)$product->id === $productId)];
            $products[] = [
                'id' => $productId,
                'product' => $product[0]->title,
                'brand' => $product[0]->brand,
                'model' => $product[0]->model,
                'img' => $product[0]->img, 
                'price' => $product[0]->price,
                'qty' => $quantity,
                'subtotal' => $quantity * $product[0]->price
            ];

            $total += $quantity * $product[0]->price;
        }
        return [
            'products' => $products,
            'total' => $total
        ];
    }
}