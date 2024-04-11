<?php
/*
Write a PHP class called 'Person' with properties like 'name' and 'age'. Implement the '__toString()' magic method to display person information
*/


class Person
{
    private $name;
    private $age;

    public function __construct($a, $b)
    {
        $this->name = $a;
        $this->age = $b;
    }

    public function __toString()
    {
        return "Name: " . $this->name . "</br>" .
        "Age: " . $this->age . "</br";
            
    }

    public function test()  {
        return "test";
    }


}

$person = new Person("Chính", 21);
echo $person;