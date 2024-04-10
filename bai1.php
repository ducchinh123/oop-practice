<?php
/*
Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to c the rectangle's area and perimeter.
(source main: https://www.w3resource.com/php-exercises/oop/index.php)
*/

class Rectangle {

    // properties
    public $length = 5;
    public $width = 10;

    // methods
    public function rectangle_perimeter() {
        echo "Với chiều dài =".$this->length."</br>";
        echo "và chiều rộng =".$this->width."</br>";
        echo "Chu vi hình chữ nhật sẽ là: (".$this->length." + ".$this->width.") * 2 = ".($this->length + $this->width)*2;
    }

    public function rectangle_acreage() {
        echo "Với chiều dài =".$this->length."</br>";
        echo "và chiều rộng =".$this->width."</br>";
        echo "Diện tích hình chữ nhật sẽ là: ".$this->length." x ".$this->width." = ".($this->length * $this->width);
    }

}

$cn1 = new Rectangle;
$cn1->length = 3;
$cn1->width = 2;
$cn1->rectangle_perimeter();
$cn1->rectangle_acreage();