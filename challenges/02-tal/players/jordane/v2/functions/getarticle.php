<?php

function getArticle($mot, $femOuMasc){
    if($femOuMasc){
        if ( preg_match("/^[aeiouy]/", $mot) ){
            return "L'";
        } else{
            return "La";
        }
    } else {
        if ( preg_match("/^[aeiouy]/", $mot) ){
            return "L'";
        } else{
            return "Le";
        }
    }
}

?>