<?php
  session_start();
  include("Template/header.php");
  require "Model/function.php";
  $msgErreurs = getErreurs();
  $msgErreur; //tableau des messages erreurs
  $messageAffiche ="";
  $name = "";
  $password = "";
  $confirmPassword = "";
  $sexe = "";
  $selected0 = "";
  $selected1 = "";
  $selected2 = "";

  if (isset($_GET["erreur"])) {
    $erreur = $_GET["erreur"]; //code erreur
    $tabErreur = str_split($erreur); //tableau des codes erreurs

    foreach ($msgErreurs as $key => $value) {
      foreach ($tabErreur as $key2 => $value2) {
        if ($value["id"] == $value2) {
          $messageAffiche .= "<div class='alert alert-warning mt-2 text-center' role='alert'>"
                              .$value['msg'] .
                             "</div>";

        }
      }
    }
  }

  if (isset($_SESSION["register"]) && !empty($_SESSION["register"])) {
    //var_dump($_SESSION["register"]);
    $name = $_SESSION["register"]["nameRegister"];
    $password = $_SESSION["register"]["passwordRegister"];
    $confirmPassword = $_SESSION["register"]["confirm_passwordRegister"];
    $sexe = $_SESSION["register"]["sexeRegister"];
    switch ($sexe) {
      case '0':
        $selected0 = "selected='true'";
        break;
      case '1':
        $selected1 = "selected='true'";
        break;
      case '2':
        $selected2 = "selected='true'";
        break;
    }
  }
?>

  <div class="container d-flex flex-column justify-content-center align-items-center mheight50vh">
    <div class="container w-50">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <?php if (isset($erreur)){ ?>
            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">S'identifier</a>
            <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">S'inscrire</a>
          <?php }  else { ?>
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">S'identifier</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">S'inscrire</a>
          <?php } ?>
        </div>
      </nav>
      <div class="tab-content mt-3" id="nav-tabContent">
        <?php if (isset($erreur)) { ?>
          <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php } else { ?>
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php } ?>
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
        <?php if (isset($erreur)) { ?>
          <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <?php } else { ?>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <?php } ?>

          <form class="needs-validation text-right" action="register.php" method="post" novalidate >
            <div class="form-group text-left">
              <!-- <label for="exampleInputName">Votre nom</label> -->
              <input type="input" class="form-control" value="<?php echo $name; ?>" name="nameRegister" placeholder="Votre nom" >
              <!-- <div class="invalid-feedback">
                Veuillez saisir votre nom.
              </div> -->
            </div>
            <div class="form-group text-left">
              <!-- <label for="exampleInputPassword1">Votre mot de passe</label> -->
              <input type="password" class="form-control" value="<?php echo $password; ?>" name="passwordRegister"  placeholder="Votre mot de passe" >
              <small id="passwordHelp" class="form-text text-muted text-right">Au minimum 6 caractères, une lettre majuscule et un chiffre.</small>
              <!-- <div class="invalid-feedback">
                Veuillez saisir votre mot de passe.
              </div> -->
            </div>
            <div class="form-group text-left">
              <!-- <label for="exampleInputPassword2">Confirmer votre mot de passe</label> -->
              <input type="password" class="form-control" value="<?php echo $confirmPassword; ?>" name="confirm_passwordRegister"  placeholder="Confirmer votre mot de passe" >
              <!-- <div class="invalid-feedback">
                Veuillez confirmer votre mot de passe.
              </div> -->
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Vous êtes</label>
                </div>
                <select class="custom-select" id="" name="sexeRegister">
                  <option <?php echo $selected0; ?> value="0">Selectionnez...</option>
                  <option <?php echo $selected1; ?> value="1">Une femme</option>
                  <option <?php echo $selected2; ?> value="2">Un homme</option>
                </select>
              </div>
            </div>


            <button type="submit" class="btn btn-primary w-25">S'inscrire</button>

            <!-- Affichage du ou des message(s) d'erreur -->
            <?php
              if (isset($messageAffiche)) {
                echo $messageAffiche;
              }
            ?>
          </form>
        </div>
      </div>
    </div>


  </div>


<?php
  include("Template/footer.php");
?>
