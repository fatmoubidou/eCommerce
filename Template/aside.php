<?php
session_start();
//var_dump($_SESSION["basket"]);

 ?>

<!-- Aside -->
<aside class="col-3">
<!-- Info User -->
  <div class="card" >
    <img class="card-img-top" src="tile-wide.png" alt="photo de profil">
    <div class="card-body">
      <h5 class="card-title"><?php echo $_SESSION["user"]["name"]; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Mot de passe : <?php echo $_SESSION["user"]["password"]; ?></li>
      <li class="list-group-item">Statut : <?php echo $_SESSION["user"]["status"]; ?></li>
      <li class="list-group-item">Sexe : <?php echo $_SESSION["user"]["sexe"]; ?></li>
    </ul>
  </div>

<!-- Basket -->
  <div class="card" >
    <div class="card-body">
      <h5 class="card-title">Mon petit panier</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><i class="fas fa-shopping-bag"></i>  <?php echo count($_SESSION["basket"]); ?>  articles</li>
      <li class="list-group-item"><a href="cart.php" class="btn btn-primary">Voir le panier</a></li>
    </ul>
  </div>
</aside>
