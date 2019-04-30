<?php


// int -> string || int;
function fizzBuzz ($n) {
    $message = "";

    if ($n % 3 == 0) {
        $message = "fizz";
    }

    if ($n % 5 == 0) {
        $message = $message . "buzz";
    }

    if ($message) {
        return $message;
    }
    return $n;
}


$solutions = array();
for ($i = 1; $i < 100; $i++) {
    $solutions[] = fizzBuzz($i);
}
var_dump($solutions);
