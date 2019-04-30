

<?php
$i = isset($_POST['invisible']) ? $_POST['invisible'] : 0;
$i++;
$issetPrenom = isset($_POST['prenom']) && $_POST["prenom"] != "";
$issetNom = isset($_POST['nom']) && $_POST["nom"] != "";

if ($issetPrenom && $issetNom) {
    echo "Bonjour " . $_POST["prenom"] . " " . $_POST["nom"] . " !";
} else {
    echo "Veuillez vous inscrire.";

}
var_dump($_POST);
?>
<form action="post.php" method="POST">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" value="test" />
    <br />
    <label for="nom">Nom :</label>
    <input type="text" name="nom" />
    <br />
    <input type="hidden" name="invisible" value="<?php echo $i ?>" />
    <button type="submit">S'inscrire</button>
</form>


