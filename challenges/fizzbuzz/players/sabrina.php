<?php
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
?>
<?php
// deuxième étape: sans if imbriqués et opérateur &&



function verif1($num1){
	
$conditions= array ("fizz"=>3, "buzz"=>5);


	foreach ($conditions as $cle => $element) {

		if($num1 % $element ==0){

			echo $cle;
				
		}
	}
}

echo verif1(1155);
echo "<br/>";

?>

<?php

//troisième étape: faire entrer le tableau en parammètre de la fonction

$conditions1 = array ("fizz"=>3, "buzz"=>5,"hiss"=>7,"howl"=>11);

function verif2($montab,$num2){

	
	foreach ($montab as $cle1 => $element1) {

		if($num2 % $element1 ==0){

			echo $cle1;
				
		}
	}
}

echo verif2($conditions1,1155);


?>

