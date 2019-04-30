<?php  

// Pizzas -> EnhancedPizzas
function enhancePizzas (&$pizzas) {
    foreach ($pizzas as $index => $pizza) {
        // check meat or not
        $hasHam = in_array("jambon", $pizza["ingredients"]);
        $hasChicken = in_array("poulet", $pizza["ingredients"]);
        $pizza["veg"] = !($hasHam || $hasChicken);

        // check cheese or not
        $hasCheese = in_array("fromage", $pizza["ingredients"]);
        $pizza["vegan"] = $pizza["veg"] && !$hasCheese;
        
        // rewrite pizza
        $pizzas[$index] = $pizza;
    }
}
