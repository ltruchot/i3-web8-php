<!doctype html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php 
    var_dump($_POST);
    $mot = "salut"; // un mot qui n'a aucune lettre en commun
    $erreur = isset($_POST["erreur"]) ?  $_POST["erreur"] : 0;
    $resultat = isset($_POST["resultat"]) ?  $_POST["resultat"] : "_____";;

    if (isset($_POST["lettre"]) && $_POST["lettre"] != "") {
      $found = strpos($mot, $_POST["lettre"]);
      if (is_int($found)) {
        $letters = str_split($resultat);
        $letters[$found] = $_POST["lettre"];
        $resultat = join($letters);
      } else {
        $erreur++;
      }
    }
?>
<form action = "index.php" method="POST"> 
    <input type="hidden" name="erreur" value="<?php echo $erreur ?>">  
    <input type="hidden" name="resultat" value="<?php echo $resultat ?>"> 
    <?php 
      if ($erreur > 0) {
        echo '<img src="img/' . $erreur.'.jpg" /><br />';
      }
      foreach (str_split($resultat) as $letter) {
        echo '<span>'. $letter .'</span> ';
      }
    ?>
    <br />
    Votre lettre: <input type="text" name="lettre" />
    <input type="submit" />
</form>
</div>
</body>
</html>
