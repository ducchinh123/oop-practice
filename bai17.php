<?php

/*
Write a PHP class called 'ShoppingCart' with properties like 'items' and 'total'. Implement methods to add items to the cart and calculate the total cost.
*/

class ShoppingCart {

    protected $item;
    protected $total = 0;
    
    public function __construct($a, $b){
        $this->item = $a;
        $this->total = $b;
    }

    public static function show_cart($items) {

        

        if(is_array($items) && !empty($items)) {
            $cart = [];
            $total = 0;
            $shop = 0;
            foreach ($items as $k => $item) {
                $cart[][$k] = ['name' => $item->item, 'price' => $item->total];
                $total += $item->total;
                $shop += 1;
            }
            $cart[]['total'] = $total;
            $cart[]['items'] = $shop;

        }

        return $cart;
    }
}

$shop1 = new ShoppingCart("a", 1);
$shop2 = new ShoppingCart("b", 2);
$shop3 = new ShoppingCart("c", 3);
$shops = [$shop1, $shop2, $shop3];
$shop = ShoppingCart::show_cart($shops);
echo "<pre>";
print_r($shop);
echo "</pre>";
