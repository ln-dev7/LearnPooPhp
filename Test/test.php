<?php

require 'vendor/autoload.php';

$leonel = new Acme\Person("Leonel Ngoya");
$ange = new Acme\Person("Ange Jipgang");

$liverpool = new Acme\Team("Liverpool");
$spurs = new Acme\Team("Tottenham");

$leonel->favorite($spurs);
$leonel->favorite($liverpool);
$ange->favorite($spurs);

echo $liverpool->getName() . ' a ' . $liverpool->getNombreFans() . " fan(s) \n";

echo $spurs->getName() . ' a ' . $spurs->getNombreFans() . " fan(s) \n";

$PLeague = new Acme\League("Premiere League");
$PLeague->addTeam($liverpool);
$PLeague->addTeam($spurs);

echo $PLeague->getTeamCount();
