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

<?php

$pizzas = array(
	array(
		  "name" => "vegetariana",
		"prix" => 14,
		"ingredients" => array("aubergine", "olive"),
		"description" => "blablabla",
		"image" => "img/pizzas/veg.jpeg"
	),
	array(
		"name" => "4 formaggi",
		"prix" => 13,
		"ingredients" => array("fromage", "crème"),
		"description" => "blablabla",
		"image" => "img/pizzas/4f.jpeg"
	),
	array(
		"name" => "Parmegiana",
		"prix" => 11,
		"ingredients" => array("parmemesan", "tomate"),
		"description" => "blablabla",
		"image" => "img/pizzas/par.jpeg"
	)
);
foreach($pizzas as $pizza) {
    echo '<div class="card" style="width: 18rem;">';
    echo '	<img src="../' . $pizza["image"] .'" class="card-img-top" >';
    echo '	<div class="card-body">';
    echo '		<h5 class="card-title">titre</h5>';
    echo '		<p class="card-text">rtauisre uirseanruit</p>';
    echo '		<a href="#" class="btn btn-primary">auiea</a>';
    echo '	</div>';
    echo '</div>';
}

?>
<div><a href="07-functions.php">Discover functions</a></div>