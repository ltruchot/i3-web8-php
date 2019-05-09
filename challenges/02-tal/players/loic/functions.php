<?php

// (List of words, string) -> List of words
function getWordsByType ($wordList, $type) {    
    return array_filter($wordList, function ($word) use ($type) {
        return $type === $word["type"];
    });
}

// Array -> Element in Array
function selectRandomInArray($arr) {
    $index = array_rand($arr);
    return $arr[$index];
}

// Word, Boolean -> String
function getArticle ($noun, $isPlural) {
    if ($isPlural) { return "Les "; }
    // french words beginning by vowels should have à « l' ». It's named "elision"
    $naturalElision = preg_match("/[aeiouAEIOUàèìòùÀÈÌÒÙáéíóúâêîôûäëïöüÄËÏÖÜÆæœ]/", $noun["content"]{0});
    // some exeptions have forced elision like "l'heure", but not "le haut".
    $forcedElisison = isset($noun["forcedElision"]) && $noun["forcedElision"];
    if ($forcedElisison || $naturalElision) {
        return "L'";
    } else if (isset($noun["fem"]) && $noun["fem"]) {
        return "La ";
    } else {
        return "Le ";
    }
}

// Word, Boolean -> String
function getNoun ($noun, $isPlural) {
    // classical french nouns take a "s" as plural
    if ($isPlural) {
        return isset($noun["plural"]) ? $noun["plural"] : $noun["content"] . "s";
    } else {
        return $noun["content"];
    }
}

// Word, Boolean -> String
function getVerb ($verb, $isPlural) {
    // classical french verbs take a "nt" as plural
    if ($isPlural) {
        return isset($verb["plural"]) ? $verb["plural"] : $verb["content"] . "nt"; 
    } else {
        return $verb["content"];
    }  
}

// Word, Word, Boolean -> String
function getAdj ($word, $adj, $isPlural) {
    $isFeminine = isset($word["fem"]) && $word["fem"];
    if ($isFeminine && $isPlural) {
        return isset($adj["femPlural"]) ? $adj["femPlural"] : $adj["content"] . "es"; 
    } elseif ($isPlural) {
        return isset($adj["plural"]) ? $adj["plural"] : $adj["content"] . "s"; 
    } elseif ($isFeminine) {
        return isset($adj["fem"]) ? $adj["fem"] : $adj["content"] . "e"; 
    } else {
        return $adj["content"];
    }
}