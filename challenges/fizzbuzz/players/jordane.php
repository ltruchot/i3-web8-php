<?php 
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