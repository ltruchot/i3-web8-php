<?php
// v1 
function fizzbuzz ($num){
    
    if(is_Int($num)){

      if($num % 3 == 0 && $num % 5 == 0){
        return "Fizzbuzz";
      } else if ($num % 5 == 0){
        return "Buzz";
      } else if ($num % 3 == 0){
        return "Fizz";
      } else{
        return $num;
      }

    }

    else{
      echo "Error, amount passed is not an integer";
    }
    
}
// v2
function fizzbuzz ($num){
    
  $string = "";

  if(!is_Int($num)){
    echo "Error, amount passed is not an integer";
  }
  
  if ($num % 3 == 0){
    $string = $string . "fizz";
  } 
  if($num % 5 == 0){
    $string = $string . "buzz";
  } 
  if($num % 7 == 0){
    $string = $string . "hiss";
  }
  if($num % 11 == 0){
    $string = $string . "howl";
  }
  if($string == ""){
    $string = $num;
  }
  

  return $string;
}


// v3
$conditions = array(
  "fizz" => 3,
  "buzz" => 5,
  "hiss" => 7,
  "howl" => 11,
  "web8" => 17
);


function fizzbuzz($arrConditions, $num) {

  $string = "";

  if(!is_Int($num)){
    $string = "Error, amount passed is not an integer";
  }

  foreach ($arrConditions as $mot => $valeur) { 
    if($num % $valeur == 0){
    $string = $string . "$mot";
    } 
  }

  if ($string == ""){
      $string = $num;
    }
  return $string;
}