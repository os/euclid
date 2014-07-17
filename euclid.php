<?php
/* Greatest Common Divisor */
	function gcd($a, $b) {
		$rem;
		$num = $a;
		$div = $b;
		/* Euclid Algorithm */
		while (true) {
			$rem = $num % $div;
			$num = $div;
			$div = $rem;
			if ($rem == 0) break; // no remainder?
		}

		return $num;
	}

/* Least Common Multiple */
	function lcm($a, $b) {
		return $a * $b / gcd($a, $b);
	}
?>
