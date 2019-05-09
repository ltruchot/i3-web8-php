<?php
include "./words.php";

// getWordsByType return only a filtered part of the words in a given array
// (List of words, string) -> List of words
function getWordsByType ($wordList, $type) {    
    return array_filter($wordList, function ($word) use ($type) {
        return $type === $word["type"];
    });
}
$nouns = getWordsByType($words, "noun");
$verbs = getWordsByType($words, "verb");
$adjs = getWordsByType($words, "adj");

function selectRandomInArray($arr) {
    $index = array_rand($arr);
    return $arr[$index];
}

$randomPlural = rand(0,1) === 1;
$randomNoun = selectRandomInArray($nouns);
$randomVerb = selectRandomInArray($verbs);
$randomAdj = selectRandomInArray($adjs);

// Word, Boolean -> String
function getArticle ($noun, $plural) {
    if ($plural) { return "Les"; }
    // french words beginning by vowels should have à « l' ». It's named "elision"
    $naturalElision = preg_match("/aeiouAEIOUàèìòùÀÈÌÒÙáéíóúâêîôûäëïöüÄËÏÖÜÆæœ/", $noun["content"]{0});
    // some exeptions have forced elision like "l'heure", but not "le haut".
    $forcedElisison = isset($noun["forcedElision"]) && $noun["forcedElision"];
    if ($forcedElisison || $naturalElision) {
        return "L'";
    } else if (isset($noun["fem"]) && $noun["fem"]) {
        return "La";
    } else {
        return "Le";
    }
}

// Word, Boolean -> String
function getNoun ($noun, $plural) {
    // classical french nouns take a "s" as plural
    if ($plural) {
        return isset($noun["plural"]) ? $noun["plural"]: $noun["content"] . "s";
    } else {
        return $noun["content"];
    }
}

// Word, Boolean -> String
function getVerb ($verb, $plural) {
    // classical french verbs take a "nt" as plural
    if ($plural) {
        return isset($verb["plural"]) ? $verb["plural"]: $verb["content"] . "nt"; 
    } else {
        return $verb["content"];
    }  
}

// Word, Boolean -> String
function getAdj ($word, $adj, $plural) {
    // classical french verbs take a "nt" as plural
    return $adj["content"] ;
}

// build sentence
$sentence = getArticle($randomNoun, $randomPlural) 
    . " " . getNoun($randomNoun, $randomPlural) 
    . " " . getVerb($randomVerb, $randomPlural) 
    . " " . getAdj($randomNoun, $randomAdj, $randomPlural)
    . " " . ".";

echo $sentence . "<br />";