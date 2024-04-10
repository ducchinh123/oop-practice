<?php
/*
Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference.
*/

class Circle {
    private $r;

    public function __construct($bk = 2) {
        $this->r = $bk;
    }

    public function calculate_circumference() {
        return 3.14*2*$this->r;
    }

    public function calculate_area() {
        return 3.14*pow($this->r, 2);
    }
}

$ht1 = new Circle(3);
echo $ht1->calculate_circumference();
echo $ht1->calculate_area();
