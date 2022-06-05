<?php

require 'vendor/autoload.php';

(new Chien)->communiquer();
(new Chat)->communiquer();
echo Animal::PATTES . "\n";

$cercle = new Cercle(5);
$carre = new Carre(3);
$triangle = new Triangle(2, 6);

echo $cercle->aire() . "\n";
echo $carre->aire() . "\n";
echo $triangle->aire() . "\n";

function toto(Animal $animal)
{
    echo "toto\n";
    $animal->communiquer();
}

toto(new Chien);
