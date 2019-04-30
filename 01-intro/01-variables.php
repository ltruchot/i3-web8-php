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
<div><a href="02-conditions.php">Discover conditions</a></div>
