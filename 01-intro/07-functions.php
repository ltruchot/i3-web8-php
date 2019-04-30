<?php 
    function say_hello () {
        echo "hello<br/>";
    }
    say_hello();
    say_hello();
?>

<?php 
    function add2 ($n) {
        return $n + 2;
    }
    echo add2(2);
    echo add2(5);
    echo add2(2);
?>

<?php 
    $age = 33;
    function happyBirthday (&$n) {
        $n = $n + 1;
    }
    happyBirthday($age);
    echo $age;
    echo round(1.2)
?>


<?php 


    function displaySub($a, $b) {
        return "$a - $b = " . ($a - $b) . "<br/>" ;
    }



    function doAverage($arrayOfNumbers) {
        $sum = array_sum($arrayOfNumbers);
        $average = $sum / count($arrayOfNumbers);
        return round($average);
    }

    $ages = array(41, 22, 35, 18, 67, 81, 17);
    echo doAverage($ages);



?>
<div><a href="08-quizz.php">Discover advanced functions</a></div>