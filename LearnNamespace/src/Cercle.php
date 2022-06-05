<?php

class Cercle implements Forme {
    private $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function aire()
    {
        echo M_PI * ($this->rayon ** 2);
        // echo pi() * ($this->rayon ** 2);
    }
}