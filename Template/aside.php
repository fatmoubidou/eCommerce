<!-- Aside -->
<?php
//session_start();
//var_dump($_SESSION);

?>
<aside class="col-3">
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
</aside>
