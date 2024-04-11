<?php
/*
Write a class called 'Math' with static methods like 'add()', 'subtract()', and 'multiply()'. Use these methods to perform mathematical calculations.
*/

class Math {

    public static function add($a, $b) {
            return "Tổng của hai số gồm ".$a." và ".$b." là ".($a + $b);
    }
    public static function subtract($a, $b) {
            return "Hiệu của hai số gồm ".$a." và ".$b." là ".($a - $b);
    }
    public static function multiply($a, $b) {
            return "Tích của hai số gồm ".$a." và ".$b." là ".($a * $b);
    }
    public static function division($a, $b) {
            return "Thương của hai số gồm ".$a." và ".$b." là ".($a / $b);
    }
}

$math = new Math();
echo $math::add(1,2);
echo $math::subtract(1,2);
echo $math::multiply(1,2);
echo $math::division(1,2);