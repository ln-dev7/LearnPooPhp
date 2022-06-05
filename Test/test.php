<?php

use Acme\{Person, League};
use Acme\Teams\Team;
// use Acme\League as Ligue; // ca nous permet de remplacer League par Ligue tout en conservant ses proprites

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
