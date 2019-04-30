<?php 
/*
// v0
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

// v1
function fizzBuzz($entier) {

	if(!is_int($entier)){
		echo "Erreur. La valeur passée à la fonction n'est pas un nombre entier.";
	}

	$message = "";

    if($entier % 3 == 0){
        $message = "FIZZ";
    }
    if($entier % 5 == 0){
        $message = $message . "BUZZ";   
    } 

  return ($message == "") ? $entier: $message;
    
}
echo fizzBuzz(15);

// 2. La complexité maîtrisée

function fizzBuzz($entier) {

    if(!is_int($entier)){
        echo "Erreur. La valeur passée à la fonction n'est pas un nombre entier.";
    }

    $message = "";

    if($entier % 3 == 0){
        $message = "FIZZ";
    }
    if($entier % 5 == 0){
        $message = $message . "BUZZ";   
    } 
    if($entier % 7 == 0){
        $message = $message . "HISS";
    }
    if($entier % 11 == 0){
        $message = $message . "HOWL";   
    } 
    if($entier % 17 == 0){
        $message = $message . "WEB8";
    }

    return ($message == "") ? $entier: $message;
    
}
echo fizzBuzz(19635);
*/

// 3. Tableau des conditions

$conditions = array(
    "fizz" => 3,
    "buzz" => 5,
    "hiss" => 7,
    "howl" => 11,
    "web8" => 17
);

function fizzbuzz ($conditions, $entier) {
	foreach ($conditions as $message => $multiple) {
	    if($entier % $multiple == 0){
			echo $message;  
		} 
	}
}

echo fizzbuzz($conditions, 19635);

echo "<h2>Fizz Buzz Hiss Howl Web8</h2>";
echo "<ul>";
for ($i = 1; $i <= 100; $i++) {
    echo "<li>" . fizzbuzz($conditions, $i) . "</li>";
}
echo "</ul>";