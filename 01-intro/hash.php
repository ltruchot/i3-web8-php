<div>
<?php 
  $persons = array(
    array(
      "first" => "Nicolas", 
      "last" => "Cage",
      "age" => 55
    ),
    array(
      "first" => "John", 
      "last" => "Travolta",
      "age" => 65
    ),
    array(
      "first" => "Loïc", 
      "last" => "Truchot",
      "age" => 33
    )
  ); 
  foreach($persons as $person) {
    echo($person["first"] . " " . $person["last"] . "</br>");
    echo "Âge: " . $person["age"] . "</br>";
  }
?>
</div>