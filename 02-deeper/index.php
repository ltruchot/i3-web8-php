<?php require_once "config.php";  ?>
<!doctype html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
  <?php 
    include_once "template/header.php"; 
    include_once "template/welcome.php"; 
  ?>

  <h3>Try our classics :</h3>

  <div class="card-columns">
      <?php
      // provide variables $pizzas
      require "data/pizzas.data.php";

      require_once "helpers/enhance_pizzas.php";
      enhancePizzas($pizzas);

      foreach($pizzas as $pizza) {
        $path = $config["img_pizzas_path"] . $pizza["image"] ;
        echo '<div class="card" style="width: 18rem">';
        echo '  <img src="' . $path .'" class="card-img-top" >';
        echo '  <div class="card-body">';
        echo '    <h5 class="card-title">' . ucfirst($pizza["name"]) . '</h5>';
        echo '    <p class="card-text">';
        echo $pizza["description"];
        if ($pizza["vegan"]) {
          echo '<span class="badge badge-success">vegan</span>';
        } elseif ($pizza["veg"]) {
          echo '<span class="badge badge-warning">veggie</span>';
        }
        echo '    </p>';
        echo '    <a href="#" class="btn btn-primary">Choisir</a>';
        echo '  </div>';
        echo '</div>';
      }

      ?>

  </div>
  <?php  include_once "template/footer.php"; ?>
</div>
</body>
</html>
  <?php var_dump($_SERVER['SCRIPT_FILENAME']); ?>
