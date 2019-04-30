<?php
/*
// première étape : vérification d'un entier et conditions imbriqués 
function verif($num){
    $nume = "$num";
    if(ctype_digit($nume)){ 
    
        if($num%3==0 && $num%5==0){
            return "fizzbuzz";
        }
        elseif ($num%3==0) {
            return "fizz";
        }
        elseif ($num%5==0) {
            return "buzz";
        }
        else{ 
            return $num;
        }
    }
    else{
        return "Ce n'est pas un entier";
    }
}   
echo verif(60);
*/
?>

<?php
// deuxième étape: sans if imbriqués et opérateur &&
// récupération du résultat dans une chaîne de caractères.
function verif($num1){
    $conditions= array("fizz"=>3, "buzz"=>5,"hiss"=>7,"howl"=>11,"web8"=>17);
    
    $machaine="";
    
    foreach ($conditions as $cle => $element) {
        if($num1 % $element ==0){
            $machaine= $machaine.$cle;          
        }
    }
    return $machaine;
}

echo "La Correspondance est dans une chaîne: " . verif(19635);
echo "<br/>";

//Récupération du résulatat dans un tableau.
function verif2($num2){
    $conditions= array ("fizz"=>3, "buzz"=>5,"hiss"=>7,"howl"=>11,"web8"=>17);
    $mon_resultat=array();
    foreach ($conditions as $cle => $element) {
        if($num2 % $element ==0){
            array_push($mon_resultat,$cle); 
        }
    }
    return $mon_resultat;
}
echo "La Correspondance est dans un tableau: ";
foreach (verif2(19635) as $afficher) {
    echo $afficher;
}
echo "<br/>";

//troisième étape: faire entrer le tableau en parammètre de la fonction
$conditions1 = array ("fizz"=>3, "buzz"=>5,"hiss"=>7,"howl"=>11,"web8"=>17);
function verif3($num2,$montab){
    $mon_resultat=array();
    foreach ($montab as $cle => $element) {
        if($num2 % $element ==0){
            array_push($mon_resultat,$cle); 
        }
    }
    return $mon_resultat;
}
echo "La Correspondance est dans un tableau: ";
foreach (verif3(19635,$conditions1) as $afficher) {
    echo $afficher;
}

echo "<h2>Fizz Buzz Hiss Howl Web8</h2>";
echo "<ul>";
for ($i = 1; $i <= 100; $i++) {
    echo "<li>" . verif($i) . "</li>";
}
echo "</ul>";
?>