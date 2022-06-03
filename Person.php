<?php

class Person {
    public $firstName;
    public $lastName;
    public $age;
    private static $totalCount = 0;

    public function __construct($firstName, $lastName, $age = 21) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

        static::$totalCount++;
    }

    public static function getTotalCount() {
        echo static::$totalCount . "\n";
    }

    public function fullName() {
        return $this->firstName . " " . $this->lastName . "\n";
    }

    public function setAge($age){
        if ($age > 18) {
            echo 'MINEUR !!!';
        }
    }

    public function getAge() {
        return $this->age * 365;
    }
}

// $leonel = new Person('Leonel', 'Ngoya', 18);
// echo $leonel->firstName . "\n";
// echo $leonel->lastName . "\n";
// echo $leonel->age . "\n";

// echo $leonel->fullName();

// echo Person::getTotalCount();