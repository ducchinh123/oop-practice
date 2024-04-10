<?php

/*
Write a PHP interface called 'Resizable' with a method 'resize()'. Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.
*/

interface Resizable
{
    public function resize($value);
}

interface Fixsizeable {
    public function fixsize($value);
}

class Square implements Resizable, Fixsizeable
{
    private $c;
    public function __construct($input)
    {
        $this->c = $input;
    }

    public function resize($value)
    {
        // logic của mình
        $this->c = $this->c * ($value / 100);
    }

    public function fixsize($value) {}

    public function getSide()
    {
        return $this->c;
    }
}

/*

Tương đồng:

Đều là khái niệm trừu tượng: Cả giao diện và lớp trừu tượng đều "không thể được khởi tạo trực tiếp".
 Thay vào đó, chúng định nghĩa một bộ quy tắc và phương thức mà các lớp con cụ thể phải triển khai.

Cho phép định nghĩa hành vi chung: Cả giao diện và lớp trừu tượng cho phép bạn định nghĩa
các phương thức mà "các lớp con có thể sử dụng". Điều này giúp tạo ra một chuẩn hoặc một giao diện chung mà các lớp con có thể tuân thủ.


Khác biệt:

Giao diện có thể triển khai nhiều: Một lớp có thể triển khai nhiều giao diện, trong khi một lớp trừu tượng chỉ có thể mở rộng một lớp cha trừu tượng.

Không có thân hàm trong giao diện: Mọi phương thức trong giao diện đều là trừu tượng và không có thân hàm. Trong khi đó, lớp trừu tượng có thể chứa cả phương thức trừu tượng và phương thức có thân hàm.

Có thể có các thuộc tính trong lớp trừu tượng: Lớp trừu tượng có thể chứa các thuộc tính, trong khi giao diện không thể chứa bất kỳ thuộc tính nào.

Như vậy, trong trường hợp của đoạn mã bạn cung cấp, giao diện 'Resizable' chỉ định nghĩa một phương thức trừu tượng để thay đổi kích thước, trong khi lớp trừu tượng có thể chứa nhiều hơn là chỉ các phương thức trừu tượng.
*/