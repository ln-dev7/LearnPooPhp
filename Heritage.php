<?php
require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';
require 'Person.php';
require 'Policier.php';

echo (new Policier('Leonel', 'Ngoya', 18, "Colonel"))->fullName();