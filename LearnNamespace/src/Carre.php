<?php

class Carre implements Forme {
    private $cote;

    public function __construct($cote)
    {
        $this->cote = $cote;
    }
    
    public function aire() {
        return $this->cote ** 2;
    }
}