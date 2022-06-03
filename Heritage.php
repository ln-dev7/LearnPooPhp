<?php
require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';
require 'Person.php';
require 'Policier.php';

// echo (new Cercle)->aire();

// echo (new Policier('Leonel', 'Ngoya', 18, "Colonel"))->fullName();

class Boom{
    public  function test(Forme $forme) {
        echo $forme->aire();
    }
}

(new Boom)->test(new Carre);