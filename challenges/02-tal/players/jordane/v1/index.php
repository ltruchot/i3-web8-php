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
        include_once "functions/getIndexes.php";

        if($getNom["feminin"]){
            if (
                strpos($getNom["mot"], "a") === 0  || 
                strpos($getNom["mot"], "e") === 0 || 
                strpos($getNom["mot"], "i") === 0 || 
                strpos($getNom["mot"], "o") === 0 || 
                strpos($getNom["mot"], "u") === 0 
                ) {
                    return "L'" . $getNom["mot"] . " " . $getVerb . " " . $getAdjFem;
                }
                else{
                    return "La " . $getNom["mot"] . " " . $getVerb . " " . $getAdjFem;
                }
        } else{
            if (
                strpos($getNom["mot"], "a") === 0  || 
                strpos($getNom["mot"], "e") === 0 || 
                strpos($getNom["mot"], "i") === 0 || 
                strpos($getNom["mot"], "o") === 0 || 
                strpos($getNom["mot"], "u") === 0 
                ) {
                    return "L'" . $getNom["mot"] . " " . $getVerb . " " . $getAdjMasc;
                }
                else{
                    return "Le " . $getNom["mot"] . " " . $getVerb . " " . $getAdjMasc;
                }
        }
};

echo createSentence();
 
?>

</body>
</html>