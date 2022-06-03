<?php

class A
{
    private static $attribut1 = 8;
    // protected static $attribut1 = 8;
    public function methode1()
    {
        echo self::$attribut1; // 8
        echo static::$attribut1; // 4
    }
}

class B extends A
{
    public static $attribut1 = 4;
    public function methode1()
    {
        parent::methode1();
    }
}

(new B)->methode1();

class C
{
    public static $x = 4;
    public function toto()
    {
        echo "Je suis la methode toto depuis A \n";
    }
}

class D extends C
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

// (new D)->tata();
