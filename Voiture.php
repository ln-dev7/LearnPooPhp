<?php

class Voiture{
    public $marque;
    public $couleur;

    public function __construct(){

    }

    public function demarrer(){
        echo "VROUM VROUM \n";
    }

    public function arreter(){
        echo "PRUMM \n";
    }

    public function klaxonner(){
        echo "PIM PIM \n";
    }

    private function relierFilBleuAuFilRouge() {

    }
}