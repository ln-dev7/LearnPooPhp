<?php

class BankAccount{
    const TAX = 0.08;
    public $accountNumber;
    private $balance = 0;

    public function __construct($accountNumber){
        $this->accountNumber = $accountNumber;
    }

    // public static function getTax() {
    //     return static::$tax;
    // }

    public function setBalance($balance) {
        if ($balance < 10000) {
            throw new Exception("L' argent est trop petit ...");
        } else {
            $this->balance = $balance;
        }
    }

    public function getBalance() {
        return $this->balance * 100;
    }
}

$compteLeonel = new BankAccount("123456789");
$compteLeonel->setBalance(12000);
$compteLeonel->getBalance();