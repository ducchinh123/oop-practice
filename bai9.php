<?php

/*
Write a PHP abstract class called 'Animal' with abstract methods like 'eat()' and 'makeSound()'. Create subclasses like 'Dog', 'Cat', and 'Bird' that implement these methods.
*/

abstract class Animal {
    abstract public function eat();
    abstract public function makeSound();
}

class Dog extends Animal {
    protected $food;
    protected $media;

    public function __construct($a, $b) {
        $this->food = $a;
        $this->media = $b;
    }

    public function eat()
    {
        return "Con chó ăn: ".$this->food;
    }

    public function makeSound()
    {
        return "Con chó kêu :".$this->media;
    }
}


class Cat extends Animal {
    protected $food;
    protected $media;

    public function __construct($a, $b) {
        $this->food = $a;
        $this->media = $b;
    }

    public function eat()
    {
        return "Con mèo ăn: ".$this->food;
    }

    public function makeSound()
    {
        return "Con mèo kêu :".$this->media;
    }
}

class Bird extends Animal {
    protected $food;
    protected $media;

    public function __construct($a, $b) {
        $this->food = $a;
        $this->media = $b;
    }

    public function eat()
    {
        return "Con chim ăn: ".$this->food;
    }

    public function makeSound()
    {
        return "Con chim kêu :".$this->media;
    }
}


// $dog = new Dog("cơm", "gâu gâu");
// echo $dog->eat();
// echo $dog->makeSound();

// $cat = new Cat("cơm", "meo meo");
// echo $cat->eat();
// echo $cat->makeSound();

// $bird = new Bird("sâu", "rít rít");
// echo $bird->eat();
// echo $bird->makeSound();