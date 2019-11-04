<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Your page</title>
</head>
<body>
<?php 
    $name;
?>
<h1>PHPizza</h1>
<?php 
    if (isset($name)) {
        echo "<h2>Hello $name !</h2>";
    } else { 
        echo "Please, <a href=\"index.php\">log in</a>";
    }
?>
</body>
</html>