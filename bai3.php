<?php

/*
Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
*/

abstract class Shape
{
    abstract public function calculateArea();
}


class Triangle extends Shape
{
    private $bottom_edge;
    private $height;

    public function __construct($a, $b)
    {
        $this->bottom_edge = $a;
        $this->height = $b;
    }

    public function calculateArea()
    {
        return ($this->bottom_edge * $this->height) / 2;
    }
}

class Rectangle extends Shape
{

    private $w;
    private $h;

    public function __construct($a, $b)
    {
        $this->w = $a;
        $this->h = $b;
    }

    public function calculateArea()
    {
        return $this->w * $this->h;
    }
}


abstract class Animal {
    abstract public function makeSound();
}

abstract class Mammal extends Animal {
    public function giveBirth() {
        echo "Giving birth...\n";
    }
}

class Dog extends Mammal {
    public function makeSound() {
        echo "Woof!\n";
    }
}

class Cat extends Mammal {
    public function makeSound() {
        echo "Meow!\n";
    }
}

// Sử dụng
$dog = new Dog();
$dog->makeSound(); // Output: Woof!
$dog->giveBirth(); // Output: Giving birth...

$cat = new Cat();
$cat->makeSound(); // Output: Meow!
$cat->giveBirth(); // Output: Giving birth...

/*

Chat GPT

Đoạn code trên định nghĩa một lớp trừu tượng PHP gọi là 'Shape' (Hình dạng) với một phương thức trừu tượng 'calculateArea()' (tính diện tích). Sau đó, hai lớp con 'Triangle' (Tam giác) và 'Rectangle' (Hình chữ nhật) được tạo ra để thực hiện phương thức 'calculateArea()'.

Ở đây là một số điểm quan trọng:

Lớp trừu tượng 'Shape': Lớp này chứa một phương thức trừu tượng 'calculateArea()'. Điều này có nghĩa là bất kỳ lớp con nào mở rộng từ lớp này đều phải cung cấp một cài đặt cho phương thức này.

Lớp con 'Triangle': Lớp này mở rộng từ lớp 'Shape'. Nó có hai thuộc tính là 'bottom_edge' (cạnh đáy) và 'height' (chiều cao). Constructor của lớp này được sử dụng để khởi tạo các giá trị cho hai thuộc tính này. Phương thức 'calculateArea()' được triển khai để tính diện tích của tam giác bằng công thức (đáy x chiều cao)/2.

Lớp con 'Rectangle': Tương tự như lớp 'Triangle', lớp 'Rectangle' cũng mở rộng từ lớp 'Shape'. Nó có hai thuộc tính là 'w' (chiều rộng) và 'h' (chiều cao). Constructor của lớp này được sử dụng để khởi tạo các giá trị cho hai thuộc tính này. Phương thức 'calculateArea()' được triển khai để tính diện tích của hình chữ nhật bằng công thức chiều rộng nhân chiều cao.

Đoạn code này cung cấp một cách tốt để sử dụng tính đa hình trong PHP. Bạn có thể tạo các đối tượng của lớp 'Triangle' hoặc 'Rectangle' và gọi phương thức 'calculateArea()' để tính diện tích tương ứng của hình.

*/