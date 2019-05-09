<h1>Traitement Automatique des Langues (TAL)</h1>

<?php
include 'tal-noms.php';
include 'tal-verbes.php';
include 'tal-adjs.php';


function frenchSentence($noms,$verbes,$adjectifs){
	// Nom random
	$rand_noms = array_rand($noms,1);
	$subject;
	// Check le genre du nom
	$gender = $noms[$rand_noms]["genre"];
	// Le genre du nom random
	$numberArray = array("singular","plural");
	$rand_number = array_rand($numberArray,1);
	$number = $numberArray[$rand_number];
	// Déclare les lettres de début qui influenceront l'article
	$vocals = array('a','e','i','o','u','y','h');
	$article;
	// Verbe random
	$rand_verbes = array_rand($verbes,1);
	$verbform;
	//Adjectif random
	$rand_adjectifs = array_rand($adjectifs,1);
	$attribut;

	// Définit article, sujet et forme verbale
	if( $number == "plural") {
		$article = "Les ";
		$subject = $noms[$rand_noms]["pluriel"];
		$verbform = $verbes[$rand_verbes]["3pp"];
	} else {
		$subject = $noms[$rand_noms]["substantif"];
		$verbform = $verbes[$rand_verbes]["3ps"];
		if(in_array($subject{0}, $vocals)){
			$article = "L'";
		} elseif($gender == "feminin") {
			$article = "La ";
		} else {
			$article = "Le ";
		}
	}

	// Définit attribut
	if($gender == "feminin" && $number == "singular") {
		$attribut = $adjectifs[$rand_adjectifs]["fem"];
	} elseif($gender == "feminin" && $number == "plural") {
		$attribut = $adjectifs[$rand_adjectifs]["fempluriel"];
	} elseif($gender == "masculin" && $number == "singular") {
		$attribut = $adjectifs[$rand_adjectifs]["masc"];
	} else {
		$attribut = $adjectifs[$rand_adjectifs]["mascpluriel"];
	}

	return $article . $subject . " " . $verbform . " " . $attribut . ".";
}

for ($i = 0; $i < 3; $i++) {
	echo frenchSentence($noms,$verbes,$adjectifs) . "<br />";
}




