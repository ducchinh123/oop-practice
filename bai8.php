<?php

/*
Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". Implement methods to deposit and withdraw money from the account.
*/

class BankAccount {
    protected $accountNumber;
    protected $balance = 0;


    public function __construct($a, $b) {
        $this->accountNumber = $a;
        $this->balance = $b;
    }
    
    // ban đầu

    public function current() {
        return $this->balance;
    }

    // nạp vào
    public function deposit($value) {
        $this->balance += $value;
        echo "Số dư hiện tại của bạn là: ".$this->current()."<br>";
    }

    // rút ra
    public function withdraw($value) {
        if($this->balance <= 0) {
            echo "Số dư không đủ để rút"."<br>";
        }elseif($value > $this->current()) {
            echo "Số tiền rút ra lớn hơn so với số dư"."<br>";
        }else {
            $this->balance -= $value;
            echo "Bạn đã rút tiền thành công: -".$value."<br>";
        }
    }
}

$newAccountBank1 = new BankAccount("0888525597", 0); 
$newAccountBank1->deposit(100);
$newAccountBank1->withdraw(50);
echo $newAccountBank1->current();