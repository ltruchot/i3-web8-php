<?php
/*
//EX de base

function fizzBuzz($number){
   if(is_int($number)==false){
      return "ERROR***ERROR***ERROR";
    }

   if(($number%3==0)&&($number%5==0)){
    	return ("fizzbuzz");
  	} else if($number%3==0){
   		return ("fizz");
  	} else if($number%5==0){
    	return ("buzz");
 	 }else{
    	return $number;
		}
	}
*/


/*
//Bonus 1 - solution 1

  function fizzBuzz($number){
  
    if(is_int($number)==false){
        return "ERROR***ERROR***ERROR";
    }

    if(($number%15==0)){
    	  return ("fizzbuzz");
  	} 
    else if($number%3==0){
   		return ("fizz");
  	} 
    else if($number%5==0){
    	return ("buzz");
 	 }
    else{
    	return $number;
		}
	}
  */

/*

//Bonus 1 - solution 2

  function fizzBuzz($number){

     if(is_int($number)==false){
       return "ERROR***ERROR***ERROR";
     }

    $line="";

     if($number%3==0){
    	  $line="fizz";
  	  } 

    if($number%5==0){
   		$line.="buzz";

 	  } 
     else{
    	$line=strVal($number);
		}
    return $line;
	}
*/

/*
//Bonus 2

function fizzBuzz($number){

   if(is_int($number)==false){
      return "ERROR***ERROR***ERROR";
    }
   
  $line="";
  $inHere=false;

   if($number%3==0){
    	  $line="fizz";
     	  $inHere=true;
  	}

    if($number%5==0){
   		  $line.="buzz";
        $inHere=true;
 	 }

    if($number%7==0){
   		$line.="hiss";
      $inHere=true;
 	 }

    if($number%11==0){
   	  $line.="howl";
      $inHere=true;
 	 }

    if($inHere==false){
    	$line=strVal($number);
		}
    return $line;
	}
*/

/* 
//Bonus 3

  $conditions = array(

   "fizz" => 3,

   "buzz" => 5,

   "hiss" => 7,

   "howl" => 11,

   "web8" => 17 

);

function fizzbuzz ($arrOfConditions, $testedInteger) {
  
  	if(is_int ($testedInteger)==false){
      return "ERROR***ERROR***ERROR";
      }

   	$line="";
  	$inHere;
 
    foreach ($arrOfConditions as $mes => $condition){
     
 
        if($testedInteger%$condition==0){
    	      $line.=$mes;
          	$inHere=true;
  
  	    } 
    }

        if($inHere==false){
    	      $line=strVal($testedInteger);
   
		    }

   return $line;

}

*/