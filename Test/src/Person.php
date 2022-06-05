<?php

namespace Acme;

use Acme\Teams\Team;

class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function favorite(Team $team)
    {
        $team->favorite();
    }
}
