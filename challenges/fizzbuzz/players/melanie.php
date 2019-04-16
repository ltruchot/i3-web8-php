<?php
	function fizzbuzz($n) {
		if (!is_int($n)) {
			return ("Erreur.");
		}
		elseif ($n % 3==0 && $n % 5==0) {
			return ("fizzbuzz");
		}
		elseif ($n % 3==0) {
			return ("fizz");
		}
		elseif ($n % 5==0) {
			return ("buzz");
		}
		else {
			return ($n);
		}
	}
	$n=84.2;
	echo fizzbuzz($n);
?>