<?php
  include("Template/header.php");
?>

<main class="container d-flex justify-content-center mb-5">
    <!-- Formulaire de connexion -->
    <form class="w-50" action="login.php" method="post">
      <div class="form-group">
        <label for="exampleInputName">Nom</label>
        <input type="input" class="form-control" id="exampleInputName" name="name" placeholder="Votre nom">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Votre mot de passe">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
      </div>
      <button type="submit" class="btn btn-primary">Me connecter</button>
    </form>
</main>

<?php
  include("Template/footer.php");
?>
