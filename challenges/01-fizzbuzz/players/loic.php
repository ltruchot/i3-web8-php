
<?php 

$converters1 = array(
    "fizz" => 3,
    "buzz" => 5
);
$converters2 = array(
    "fizz" => 3,
    "buzz" => 5,
    "hiss" => 7,
    "howl" => 11 
);
$converters3 = array(
    "fizz" => 3,
    "buzz" => 5,
    "hiss" => 7,
    "howl" => 11,
    "web8" => 17
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



$fizzBuzz = makeFizzBuzz($converters1);
$fizzBuzzHissHowl = makeFizzBuzz($converters2);
$fizzBuzzHissHowlWeb8 = makeFizzBuzz($converters3);

echo "<h2>Fizz Buzz</h2>";
echo "<ul>";
for ($i = 1; $i <= 100; $i++) {
    echo "<li>" . $fizzBuzz($i) . "</li>";
}
echo "</ul>";

echo "<h2>Fizz Buzz Hiss Howl</h2>";
echo "<ul>";
for ($i = 1; $i <= 100; $i++) {
    echo "<li>" . $fizzBuzz($i) . "</li>";
}
echo "</ul>";

echo "<h2>Fizz Buzz Hiss Howl Web8</h2>";
echo "<ul>";
for ($i = 1; $i <= 100; $i++) {
    echo "<li>" . $fizzBuzzHissHowlWeb8($i) . "</li>";
}
echo "</ul>";