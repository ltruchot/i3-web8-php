<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
    function createSentence() {
        include_once "arrays/nomscommuns.php";
        include_once "arrays/verbesetat.php";
        include_once "arrays/adjectifs.php";
        include_once "functions/randomindex.php";
        include_once "functions/getArticle.php";
        $getNom = $nomsCommuns[getRandomIndex($nomsCommuns)];
        $getVerb = $verbesEtat[getRandomIndex($verbesEtat)];
        $getAdjMasc = $adjMasculins[getRandomIndex($adjMasculins)];
        $getAdjFem = $adjFeminins[getRandomIndex($adjFeminins)];
        $article = getArticle($getNom["mot"], $getNom["feminin"]);

        if($getNom["feminin"]){
            return $article . " " . $getNom["mot"] . " " . $getVerb . " " . $getAdjFem;
        } else{
            return $article . " " . $getNom["mot"] . " " . $getVerb . " " . $getAdjMasc;
        }
};

echo createSentence();
 
?>

</body>
</html>