
<?php 
    $list = array("Pascal", 45, "Coach", false, "Amsterdam"); 
    echo "His name is " . $list[0] .", he live in ". $list[4];
?>

<?php 
$birds = array("cardinal", "kestrel", "kite", "mockingbird"); 

foreach($birds as $bird) {
    echo $bird . " says tweet tweet.<br />";
}
shuffle($birds);
foreach($birds as $index => $bird) {
    echo $bird . " is now n°" . $index . " in the list<br />";
}
?>

<?php 
    $person = array(
        "name" => "Pascal", 
        "age" => 45, 
        "job" => "Coach", 
        "married" => false, 
        'city' => "Amsterdam"); 
    echo "His name is " . $person["name"] .", he live in ". $person["city"];
    foreach($person as $key => $value) {
        echo "$key: $value</br>";
    }
?>
<?php 
    $person = array(
        array("first" => "Nicolas", "last" => "Cage"),
        array("first" => "John", "last" => "Travolta"),
    ); 

    foreach($person as $value) {
        echo $value["first"] . " " . $value["last"] . "</br>";
    }
?>
<div><a href="06-collections.php">Discover collections</a></div>