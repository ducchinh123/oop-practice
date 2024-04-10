<?php

/*
Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details.
*/

class Vehicle {

    private $brand;
    private $model;
    private $year;

    public function __construct($a, $b, $c) {
        $this->brand = $a;
        $this->model = $b;
        $this->year = $c;
    }
    public function show_detail() {
        return "Đây là chiếc xe hãng {$this->brand} với kiểu máy là {$this->model} và sản xuất năm {$this->year}";   
    }
}

$vehicle1 = new Vehicle("Honda", "Dream", "2000");
echo $vehicle1->show_detail();