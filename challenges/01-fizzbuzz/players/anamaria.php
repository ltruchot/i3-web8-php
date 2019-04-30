<?php
function fizzbuzz($n){        

// $h =  $n % 3 == 0 ? $n % 5 == 0 ? "FizzBuzz" : "";
    $a = ($n % 3 == 0) ? "Fizz" : "";
    $o = ($n % 5 == 0) ? "Buzz" : "";


      if ($a) {
         echo $a;
     }elseif($o){
        echo $o;
   }elseif($h){
        echo $h;
   }else{
          echo $n;
    }        
}
fizzbuzz(30);
// Desole je ne pas reussi a le faire marche ..j'ai essaye 3 fois

//2eme fois
function fizzbuzz($n){
            $a=3;
            $b=5;
    
    switch ($n) {
         case ($n % 3 == 0):
             echo "Fizz";
             break;
         case ($n % 5 == 0):
             echo "Buzz";
             break;
         case ($n % 3 == false):
             echo "FizzBuzz";
            break;
         case ($n % 5 == false):
             echo "FizzBuzz";
          break;
         default:
             echo $n;                 
             break;
    
        
    }
}
fizzbuzz(4);
//3eme fois
function fizzbuzz($n){
  
  
//    $a = $n / 3 == true;
  //$b = $n / 5 == true;

  $c = $n % 3 == 0;
  $d = $n % 5 == 0;
  $e = "fizz";
  $f = "buzz";
  $g = $n;
  $h = $c || $d ? "fizzbuzz" : "";
  switch ($n) {
      case $a:
          echo $e;
          break;
      case $b:
          echo $f;    
          break;
      case $c:
          echo $e;
       break;
   case $d:
       echo $f;
       break;
   case $c:
       echo ($e . $f);
       break;
   case $b:
       echo ($e . $f);
       break;
   case $h:
       echo ($e . $f);
       break;
      default:
          echo $n;
          break;
  }

}

fizzbuzz(30);