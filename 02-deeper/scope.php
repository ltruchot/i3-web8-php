<script>
    var test = 42;
    function testX2 () {
        test = test * 2;
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
    $test = 42;
    function testX3 ($val) {
        $result = $val * 3;
        return $result;
    }
    $test = testX3($test);
    var_dump($test);
?>
<?php
    $test = 42;
    function testX4 () {
        global $test;
        $test = $test * 4;
    }
    testX4();
    var_dump($test);

?>
<?php
    $test = 42;
    function testX5 (&$var) {
        $var = $var * 5;
    }
    testX5($test);
    var_dump($test);
?>