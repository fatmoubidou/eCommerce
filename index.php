<?php
  include("Template/header.php");
?>

  <div class="container d-flex justify-content-center align-items-center height50vh">
    <!-- Formulaire de connexion -->
    <form class="needs-validation w-50 text-right" action="login.php" method="post" novalidate >
      <div class="form-group text-left">
        <label for="exampleInputName">Nom</label>
        <input type="input" class="form-control" id="exampleInputName" name="name" placeholder="Votre nom" required>
        <div class="invalid-feedback">
          Veuillez saisir votre nom.
        </div>
      </div>
      <div class="form-group text-left">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Votre mot de passe" >
        <div class="invalid-feedback">
          Veuillez saisir votre mot de passe.
        </div>
      </div>
      <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
      </div> -->
      <button type="submit" class="btn btn-primary w-25">Me connecter</button>
      <?php
      if (isset($_GET["msg"])) {
        $message = htmlspecialchars($_GET["msg"]);
        echo "<div class='alert alert-warning mt-4 text-center ' role='alert'>
                ".$message."
              </div>";
      }
        //var_dump($_GET);
       ?>
    </form>
  </div>


<?php
  include("Template/footer.php");
?>
