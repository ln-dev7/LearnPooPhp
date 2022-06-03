<?php

class Person{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function favorite(Team $team){
        $team->favorite();
    }
}

class Team
{
    private $name;
    private $nombreFans = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getNombreFans() {
        return $this->nombreFans;
    }

    public function favorite() {
        $this->nombreFans++;
    }
}

class League
{
    private $name;
    private $teams;

    public function __construct($name)
    {
        $this->name = $name;
        $this->teams = [];
    }

    public function addTeam(Team $team) {
        $this->teams[] = $team;
    }

    public function getTeamCount() {
        return 'La ' . $this->name . ' a ' . count($this->teams) . " equipe(s) \n";
    }
}

$leonel = new Person("Leonel Ngoya");
$ange = new Person("Ange Jipgang");

$liverpool = new Team("Liverpool");
$spurs = new Team("Tottenham");

$leonel->favorite($spurs);
$leonel->favorite($liverpool);
$ange->favorite($spurs);

echo $liverpool->getName() . ' a ' . $liverpool->getNombreFans() . " fan(s) \n";
 
echo $spurs->getName() . ' a ' . $spurs->getNombreFans() . " fan(s) \n";

$PLeague = new League("Premiere League");
$PLeague->addTeam($liverpool);
$PLeague->addTeam($spurs);

echo $PLeague->getTeamCount();

// -----------------------

class A
{
    public function toto($x)
    {
        echo "toto de A " . $x . " \n";
    }
}

class B extends A
{
    public function toto($x)
    {
        echo "toto de B " . $x . " \n";
    }
}

// (new B)->toto('Yoro');

// -----------------------

class C
{
    private static $attribut1 = 8;
    // protected static $attribut1 = 8;
    public function methode1()
    {
        echo self::$attribut1; // 8
        echo static::$attribut1; // 4
    }
}

class D extends C
{
    public static $attribut1 = 4;
    public function methode1()
    {
        parent::methode1();
    }
}

// (new D)->methode1();

// -----------------------

class E
{
    public static $x = 4;
    public function toto()
    {
        echo "Je suis la methode toto depuis A \n";
    }
}

class F extends E
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

// (new F)->tata();

// -----------------------
