<div>
      Or choose the daily chef choice:<br />
    <strong>
      <?php 
      $randomIndex = rand(0, (count($pizzas) - 1));
          echo $pizzas[$randomIndex]["name"]
      ?>
      <span class="badge badge-secondary">New</span>
    </strong>
</div>
<p>
    <em>Pizza price: <?php echo $prix;  ?></em>  € <br/> See you soon <?php echo $firstName; ?>.</em>
</p>
