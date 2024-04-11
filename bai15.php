<?php

/*
Write a PHP class called 'File' with properties like 'name' and 'size'. Implement a static method to calculate the total size of multiple files.s
*/

class File {
    protected $name;
    protected $size;
    
    public function __construct($a, $b) {
        $this->name = $a;
        $this->size = $b;
    }

    public function getSize() {
        return $this->size;
    }

    public static function totalSize($files) {
        $total = 0;
        if(is_array($files) && !empty($files)) {
            foreach ($files as $file) {
                $total += $file->getSize();
            }
            return $total;
        }
    }
}

$file1 = new File("file1.docx", 10);
$file2 = new File("file2.docx", 10);
$file3 = new File("file3.docx", 10);
$files = [$file1, $file2, $file3];
$totalSize = File::totalSize($files);
echo $totalSize;