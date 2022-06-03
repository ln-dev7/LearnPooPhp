<?php

class A
{
    public static $x = 4;
    public function toto()
    {
        echo "Je suis la methode toto depuis A \n";
    }
}

class B extends A
{
    public static $x = 5;
    public function tata()
    {
        parent::toto();
        echo parent::$x; // 4
        echo static::$x; // 5
        echo "Je suis la methode tata depuis B \n";
    }
}

(new B)->tata();
