<?php

/*
Write a class called 'Employee' that extends the 'Person' class and adds properties like 'salary' and 'position'. Implement methods to display employee details.
*/

class Person {
    protected $name;
    protected $age;

    public function __construct($a, $b) {
        $this->name = $a;
        $this->age = $b;
    }
   

}

class Employee extends Person {

    private $salary;
    private $position;

    public function __construct($a, $b, $c, $d) {
        parent::__construct($a, $b);
        $this->salary = $c;
        $this->position = $d;
    }

    public function show_employee() {
        echo "Tên: ".$this->name."<br>";
        echo "Tuổi: ".$this->age."<br>";
        echo "Mức lương: ".$this->salary."<br>";
        echo "Vị trí: ".$this->position."<br>";
    }
}

$employee = new Employee("Đặng Chính", 21, "Tùy theo năng lực", "Kỹ sư It");
$employee->show_employee();