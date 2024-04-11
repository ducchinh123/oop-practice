<?php

/*
 Write a PHP class called 'Calculator' that has a private property called 'result'. Implement methods to perform basic arithmetic operations like addition and subtraction.
 */

class Calculator
{
    private $result = 0;

    public function getResult()
    {
        return $this->result;
    }

    public function add($value)
    {
        return $this->result += $value;
    }

    public function subtract($value)
    {
        return $this->result -= $value;
    }
}

$caculator = new Calculator;
echo $caculator->add(100);
echo $caculator->add(300);
echo $caculator->subtract(10);