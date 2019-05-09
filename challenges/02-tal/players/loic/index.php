<?php
include "./words.php";
include "./functions.php";


function createRandomSentence ($wordList) {
    // get all words
    $nouns = getWordsByType($wordList, "noun");
    $verbs = getWordsByType($wordList, "verb");
    $adjs = getWordsByType($wordList, "adj");

    // choose random words & plural
    $randomPlural = rand(0,1) === 1;
    $randomNoun = selectRandomInArray($nouns);
    $randomVerb = selectRandomInArray($verbs);
    $randomAdj = selectRandomInArray($adjs);

    // build sentence
    $sentence = getArticle($randomNoun, $randomPlural) . getNoun($randomNoun, $randomPlural) 
        . " " . getVerb($randomVerb, $randomPlural) 
        . " " . getAdj($randomNoun, $randomAdj, $randomPlural)
        . ".";

    return $sentence;
}

// create haiku
for ($i = 0; $i < 3; $i++) {
	echo createRandomSentence($words) . "<br />";
}
