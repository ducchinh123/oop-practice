<?php

/*
Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. Implement a method to display student information.
*/

class Student {
    protected $name;
    protected $age;
    protected $grade;

    public function __construct($a, $b, $c) {
        $this->name = $a;
        $this->age = $b;
        $this->grade = $c;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getGrade() {
        return $this->grade;
    }

    public function show_student() {
        echo "Tên :".$this->getName()."<br>";
        echo "Tuổi :".$this->getAge()."<br>";
        echo "Lớp :".$this->getGrade();
    }
}

$st1 = new Student("Chính", "21", "Cao đẳng");
$st1->show_student();