<?php
class Voiture {
    // propriétés
    public $nbRoues = 5;
    public $couleur = "";

    public function __construct ($couleur) {
        $this->couleur = $couleur;
    }

    // méthodes
    public function rouler () {
        echo "moi, voiture " . 
            $this->couleur .  
            ", j'ai avancé de " . 
            rand(1, 50) . "km<br />";
    }
}
?>
