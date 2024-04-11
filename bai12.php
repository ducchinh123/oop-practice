<?php

/*
Write a class called 'Product' with properties like 'name' and 'price'. Implement the 'Comparable' interface to compare products based on their prices.
*/

interface Comparable {
    public function compare($compare);
}

class Product implements Comparable {
    private $name;
    private $price;

    public function __construct($a, $b) {
        $this->name = $a;
        $this->price = $b;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function compare($otherProduct) {
        if($otherProduct instanceof Product) {
            if($otherProduct->getPrice() > $this->price) {
                echo "Sản phẩm ".$otherProduct->getName()." có giá cao hơn sản phẩm ".$this->getName();
            }
            elseif($otherProduct->getPrice() < $this->price) {
                echo "Sản phẩm ".$otherProduct->getName()." có giá thấp hơn sản phẩm ".$this->getName();
            }
            else {
                echo "Sản phẩm ".$otherProduct->getName()." có giá ngang bằng sản phẩm ".$this->getName();
            }
        }
    }
}

$product1= new Product("Iphone 12", 1000);
$product2 = new Product("Iphone 13", 2000);
$product1->compare($product2);