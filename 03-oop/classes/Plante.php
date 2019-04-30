<?php 
    class Plante {
        public $taille = 0;
        public $couleur = "";

        public function __construct ($couleur, $taille) {
            $this->couleur = $couleur;
            $this->taille = $taille;
        }

        public function pousser () {
            $this->taille++;
            echo "Maintenant je fais " . $this->taille . " mètres.<br />";
        }

    }
