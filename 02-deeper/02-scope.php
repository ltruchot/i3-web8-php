<script>
    var test = 42;
    function testX2 () {
        test = test * 2;
        function toto () {
            test = test * 2;
        }
        toto();
    }
    testX2()
    console.log(test);
</script>
<?php
    $test = 42;
    function testX2 () {
        $test = $test  * 2;
    }
    testX2();
    var_dump($test);
?>



<?php
/*
    $test = 42;
    function testX3 ($val) {
        $result = $val * 3;
        return $result;
    }
    $test = testX3($test);
    var_dump($test);

    $test = 42;
    function testX4 () {
        global $test;
        $test = $test * 4;
    }
    testX4();
    var_dump($test);


    $test = 42;
    function testX5 (&$var) {
        $var = $var * 5;
    }
    testX5($test);
    var_dump($test);
    */
?>


<?php
$items = array(
    array(
          "name" => "vegetariana",
        "prix" => 14,
        "ingredients" => array("aubergine", "olive"),
        "description" => "blablabla",
        "image" => "../img/pizzas/veg.jpeg"
    ),
    array(
        "name" => "4 formaggi",
        "prix" => 13,
        "ingredients" => array("fromage", "crème", "ham"),
        "description" => "blablabla",
        "image" => "../img/pizzas/4f.jpeg"
    ),
    array(
        "name" => "Parmegiana",
        "prix" => 11,
        "ingredients" => array("parmemesan", "tomate"),
        "description" => "blablabla",
        "image" => "../img/pizzas/par.jpeg"
    )
);

// Pizzas -> EnhancedPizzas
function enhancePizzas (&$pizzas) {
    foreach ($pizzas as $index => $pizza) {
        // check meat or not
        $hasHam = in_array("ham", $pizza["ingredients"]);
        $hasChicken = in_array("chicken", $pizza["ingredients"]);
        $pizza["veg"] = !($hasHam || $hasChicken);
        $pizzas[$index] = $pizza;
    }
}
enhancePizzas($items);


var_dump($items);

/*
function double ($n) {
    return $n * 2;
}
// test if it returns an integer
if (is_int(double(5))) {
    echo "success";
} else {
    echo "failure";
}

// test if it returns the double
if (double(5) === 10) {
    echo "success";
} else {
    echo "failure";
}

*/
