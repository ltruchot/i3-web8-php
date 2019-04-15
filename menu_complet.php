<!doctype html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php 
  $firstName = "Loïc";
  $lastName = "Truchot";
  $day = "Friday";
  $prix = 9;
  $total = 36;
?>
<div class="container">

<header>
  <h1><img class="logo" src="img/logo.png" />PHPizza</h1>
</header>

<h2>Hello <?php echo $firstName . " " . $lastName; ?> !</h2>


    <p>
     <?php echo "Today is $day "; ?>: week-end is coming.<br />
    What about a delicious Pizza tonight, <?php echo $firstName; ?> ?
</p>


<h3>Try our classics :</h3>


<div class="card-columns">
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
      ),
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
      echo '  <img src="' . $pizza["image"] .'" class="card-img-top" >';
      echo '  <div class="card-body">';
      echo '    <h5 class="card-title">titre</h5>';
      echo '    <p class="card-text">rtauisre uirseanruit</p>';
      echo '    <a href="#" class="btn btn-primary">Choisir</a>';
      echo '  </div>';
      echo '</div>';
    }

    ?>

</div>
<div>
      Or choose the daily chef choice:<br />
    <strong>
      <?php 
      $randomIndex = rand(0, (count($pizzas) - 1));
          echo $pizzas[$randomIndex]["name"]
      ?>
      <span class="badge badge-secondary">New</span>
    </strong>
</div>
<p>
    <em>Pizza price: <?php echo $prix;  ?></em>  € <br/> See you soon <?php echo $firstName; ?>.</em>
</p>
</div>

</body>
</html>
