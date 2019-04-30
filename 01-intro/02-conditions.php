<?php 
  $total = 20;
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
  echo "Total après réduction: €" . ($total - $promo) . "</br>";
  echo ($total - $promo) > 100 ? "Merci, mon client préféré !" : "";
} else {
  echo "Vous n'avez aucun discount. Faites vos achats d'abord.";
}
?>
</div>
<div><a href="03-switch.php">Discover switch</a></div>