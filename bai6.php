<?php

/*
 Write a PHP a class hierarchy for a library system, including classes like 'LibraryItem', 'Book', 'DVD', etc. Implement appropriate properties and methods for each class.

*/

class LibraryItem
{
    protected $title;
    protected $author;
    protected $year;

    public function __construct($a, $b, $c)
    {
        $this->title = $a;
        $this->author = $b;
        $this->year = $c;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getYear()
    {
        return $this->year;
    }
}

class Book extends LibraryItem
{
    protected $genre;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->genre = $d;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function show_book()
    {
        echo "Sách có tên là: {$this->getTitle()} <br>";
        echo "Tác giả: {$this->getAuthor()} <br>";
        echo "Xuất bản năm: {$this->getYear()} <br>";
        echo "Thể loại: ".$this->getGenre();
    }

}

class DVD extends LibraryItem
{

    protected $duration;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->duration = $d;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function show_dvd()
    {
        echo "Đĩa có tên là: {$this->getTitle()} <br>";
        echo "Tác giả: {$this->getAuthor()} <br>";
        echo "Xuất bản năm: {$this->getYear()} <br>";
        echo "Thời lượng: ".$this->getDuration();
    }
}

// $book1 = new Book("Quê hương", "Nam Cao", "2011", "Dân gian");
// $book1->show_book();

$dvd1 = new DVD("Album Quê", "Nhiều ca sĩ", "2020", "60P");

$dvd1->show_dvd();