<?php
include "pizza.data.php";

foreach($pizzas as $pizza) {
    echo '<div class="card" style="width: 18rem;">';
    echo '	<img src="' . $pizza["image"] .'" class="card-img-top" >';
    echo '	<div class="card-body">';
    echo '		<h5 class="card-title">titre</h5>';
    echo '		<p class="card-text">rtauisre uirseanruit</p>';
    echo '		<a href="#" class="btn btn-primary">auiea</a>';
    echo '	</div>';
    echo '</div>';
}
