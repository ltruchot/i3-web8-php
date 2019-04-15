<?php 
  $firstName = "Loïc";
  $lastName = "Truchot";
  $day = "Friday";
  $prix = 9;
  $nbOfPizza = 5;
  $discount = 0.2;
  $total = $nbOfPizza * $prix;
  $discountApplied = $total * $discount;
  $total = $total - $discountApplied;
  $isConnected = true;
  $hasDiscount = false;
  $bothConditions = $isConnected || $hasDiscount;
?>
<h1>PHPizza</h1>
<h2>Hello <?php echo $firstName . " " . $lastName; ?> !</h2>
<p>
     <?php echo "Today is $day "; ?>: week-end is coming.<br />
    What about a delicious Pizza tonight, <?php echo $firstName; ?> ?
</p>
<div>
    Try our classics :
    <ul>
        <li>Vegeteriana</li>
        <li>Il Diavolo</li>
        <li>Quattro Formagi</li>
    </ul>
    Or choose the daily chef choice:
    <strong>the Calzone</strong>
</div>
<p>
    <em>Pizza price: <?php echo $prix;  ?> € - See you soon <?php echo $firstName; ?>.</em>
</p>
<div>Total: <?php echo $total; ?></div>
<div>Has both condition: <?php echo $bothConditions ?></div>
<div><a href="conditions.php">Discover conditions</a></div>
<?php 
  $promo = 0;
?>
<div>
<?php 
if (isset($total)) {
  echo "Total: €$total<br/>";
  if ($total >= 20 && $total <= 30) {
    $promo = ($total * 0.1);
  } elseif ($total > 30 && $total <= 50) {
    $promo = ($total * 0.2);
  } elseif ($total > 50) {
    $promo = ($total * 0.3);
  }
  echo "Vous avez un promo de €" . $promo . "</br>";
  echo "Total après réduction: €" . ($total - $promo);
} else {
  echo "Vous n'avez aucun discount. Faites vos achats d'abord.";
}
?>
</div>
