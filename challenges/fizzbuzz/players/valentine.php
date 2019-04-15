<?php 
$entier = 15;
function fizzBuzz($entier) {
    if($entier % 3 == 0 && $entier % 5 == 0) {
        return '<h3>FIZZBUZZ</h3>';
    } elseif ($entier % 5 == 0) {
        return '<h3>BUZZ</h3>';
    } elseif ($entier % 3 == 0) {
        return '<h3>FIZZ</h3>';
    } elseif (is_int($entier)) {
        return '<h3>' . $entier . '</h3>';
    } else {
        return "Erreur. La valeur passée à la fonction n'est pas un nombre entier.";
    }
}
echo fizzBuzz($entier);
