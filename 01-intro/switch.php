<?php
$total = 6;
$discount;
$discountCode = "MAXIPROMO";
switch ($discountCode) {
	case 'PROMO':
		$discount = 10;
		break;
	case 'MAXIPROMO':
		$discount = 20;
		break;
	default:
		$discount = 0;
		break;
}
$total = $total - $discount;

var_dump($total);

$total = $total < 10 ? 10 : $total;

var_dump($total);

echo "Total: €" . $total;

?>
