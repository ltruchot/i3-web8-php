<?php
$converters = array(
  "fizz" => 3,
  "buzz" => 5
);




function makeFizzBuzz ($c) {
    return function ($n) use ($c) {
        $result = array_reduce(
            array_keys($c), 
            function ($a, $k) use ($c, $n) { 
                return $n % $c[$k] === 0 ? $a . $k : $a; 
            }, 
            ""
        ); 
        return $result ? $result : $n;
    }; 
} 





$fizzBuzz = makeFizzBuzz($converters);

$solutions = array();
for ($i = 0; $i < 100; $i++) {
    $solutions[] = $fizzBuzz($i);
}
// var_dump($solutions);


function jv1 ($num){
    
    if(is_Int($num)){

      if($num % 3 == 0 && $num % 5 == 0){
        return "fizzbuzz";
      } else if ($num % 5 == 0){
        return "buzz";
      } else if ($num % 3 == 0){
        return "fizz";
      } else{
        return $num;
      }

    }

    else{
      echo "Error, amount passed is not an integer";
    }
    
}

foreach ($solutions as $index => $solution) {
    if ($solutions[$index] !== jv1($index)) {
        echo "This code doesn't work.";
        break;
    }
}
