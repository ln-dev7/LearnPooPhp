<?php

class Cercle extends Forme {
    private $rayon = 5;
    public function aire()
    {
        echo M_PI * ($this->rayon ** 2);
        // echo pi() * ($this->rayon ** 2);
    }
}