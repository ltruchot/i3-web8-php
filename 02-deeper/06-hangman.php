<?php

// var_dump($_POST);

// variables pour le php (plutôt un constant en fait)
$mot = "salut";

// variables dont je dois mémoriser l'état
$nbErreur = isset($_POST["nombre_erreur"]) ? (int)$_POST["nombre_erreur"] : 0;
$letters = isset($_POST["affichage_lettre"]) ? $_POST["affichage_lettre"] : "_____";
$resultat = "";
var_dump($letters);

if (isset($_POST["letter"]) && $_POST["letter"] != "") {
    $found = strpos($mot, $_POST["letter"]);
    if (is_int($found)) {
        $resultat = "Bravo, vous avez trouvé une des lettre";
        $solutions = str_split($letters);
        $solutions[$found] = $_POST["letter"];
        $letters = join($solutions);
        if (!in_array("_", $solutions)) {
            $resultat = "Vous avez gagné, winner <3 <3 <3.";
        }

    } else {
        if ($nbErreur >= 5) { 
            $resultat = "Désolé mais... game over quoi.";
        } else {
            $resultat = "Mauvaise lettre ! loser !" ;
            $nbErreur++;
        }

    }
}

var_dump($nbErreur);
?>


<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="../css/hangman.css">
</head>
<body>
    <h1>
        <img class="logo" src="../img/chats/logo.png" />
        Le vilain chat
        <img class="logo-reversed" src="../img/chats/logo.png" />
    </h1>
    <h2>Devine le mot avant que le chat arrive !</h2>
    <div><?php echo (($nbErreur >= 5) ? ' style="display:none;"' : ""); ?>>
        <div>Le fameux mot:
            <span style="letter-spacing: 20px;"><?php echo $letters ?></span>
        </div>
        <br />

        <form method="POST" action="06-hangman.php">
            Choisissez une lettre :
            <input type="text" name="letter" maxlength="1" style="width: 30px;" />
            <br />
            <input type="hidden" name="nombre_erreur" value="<?php echo $nbErreur; ?>">
            <input type="hidden" name="affichage_lettre" value="<?php echo $letters; ?>">
            <button type="submit">Jouer</button>
        </form>
    </div>
    <div>


        <p><?php echo $resultat; ?></p>
        <div style="text-align: center;">
            <img src="../img/chats/<?php echo ($nbErreur + 1); ?>.jpg" style="width: 70px; margin: 0 auto;">
        </div>
    

    </div>
</body>
</html>
