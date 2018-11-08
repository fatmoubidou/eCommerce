<?php
  include("Template/header.php");
?>

  <div class="container d-flex flex-column justify-content-center align-items-center height50vh">
    <div class="container w-50">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">S'identifier</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">S'inscrire</a>
        </div>
      </nav>
      <div class="tab-content mt-3" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <!-- Formulaire de connexion -->
          <form class="needs-validation text-right" action="login.php" method="post" novalidate >
            <div class="form-group text-left">
              <!-- <label for="exampleInputName">Nom</label> -->
              <input type="input" class="form-control" id="exampleInputName" name="name" placeholder="Votre nom" required>
              <div class="invalid-feedback">
                Veuillez saisir votre nom.
              </div>
            </div>
            <div class="form-group text-left">
              <!-- <label for="exampleInputPassword1">Mot de passe</label> -->
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Votre mot de passe" >
              <div class="invalid-feedback">
                Veuillez saisir votre mot de passe.
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-25">Se connecter</button>
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
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <form class="needs-validation text-right" action="register.php" method="post" novalidate >
            <div class="form-group text-left">
              <!-- <label for="exampleInputName">Votre nom</label> -->
              <input type="input" class="form-control" id="" name="nameRegister" placeholder="Votre nom" >
              <!-- <div class="invalid-feedback">
                Veuillez saisir votre nom.
              </div> -->
            </div>
            <div class="form-group text-left">
              <!-- <label for="exampleInputPassword1">Votre mot de passe</label> -->
              <input type="password" class="form-control" id="" name="passwordRegister"  placeholder="Votre mot de passe" >
              <small id="passwordHelp" class="form-text text-muted text-right">Au minimum 6 caractères, une lettre majuscule et un chiffre.</small>
              <!-- <div class="invalid-feedback">
                Veuillez saisir votre mot de passe.
              </div> -->
            </div>
            <div class="form-group text-left">
              <!-- <label for="exampleInputPassword2">Confirmer votre mot de passe</label> -->
              <input type="password" class="form-control" id="" name="confirm_passwordRegister"  placeholder="Confirmer votre mot de passe" >
              <!-- <div class="invalid-feedback">
                Veuillez confirmer votre mot de passe.
              </div> -->
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Vous êtes</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Selectionnez...</option>
                <option value="1">Une femme</option>
                <option value="2">Un homme</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary w-25">S'inscrire</button>

          </form>
        </div>
      </div>
    </div>


  </div>


<?php
  include("Template/footer.php");
?>
