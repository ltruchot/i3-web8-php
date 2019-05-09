<?php

function getRandomIndex($array){
        $randomIndex = rand(0, (count($array) -1 ));
        return $randomIndex;
    }

?>