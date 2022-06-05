<?php

class Triangle implements Forme {
    private $base;
    private $hauteur;

    public function __construct($base, $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function aire(){
        return ($this->base * $this->hauteur) / 2;
    }
}