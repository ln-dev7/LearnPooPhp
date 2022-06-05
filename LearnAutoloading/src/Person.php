<?php

namespace Acme;

use Acme\Teams\Team;
use Song;

class Person
{
    private $name;

    public function __construct($name, Song $songFavori)
    {
        $this->name = $name;
    }

    public function favorite(Team $team)
    {
        $team->favorite();
    }
}
