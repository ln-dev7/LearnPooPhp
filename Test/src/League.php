<?php

namespace Acme;

use Acme\Teams\Team;

class League
{
    private $name;
    private $teams;

    public function __construct($name)
    {
        $this->name = $name;
        $this->teams = [];
    }

    public function addTeam(Team $team)
    {
        $this->teams[] = $team;
    }

    public function getTeamCount()
    {
        return 'La ' . $this->name . ' a ' . count($this->teams) . " equipe(s) \n";
    }
}
