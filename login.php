<?php
//var_dump($_POST);
require "Model/function.php";
$users = getUsers();
//var_dump($users);

//Vérifie si le formulaire est rempli
if (!empty($_POST)) {
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars("$value") ; //sécurise les saisies du formulaire
  }

  foreach ($users as $key => $user) {
    // Met en majuscule nom et password
    // $user["name"] = mb_strtoupper($user["name"]);
    // $user["password"] = mb_strtoupper($user["password"]);
    //echo $user["name"]." ".$user["password"];

    // Test de l'authentification
    if($user["name"] === $_POST["name"] && $user["password"] === $_POST["password"]){
      session_start();
      $_SESSION["user"] = $user;
      header("Location: products.php");
      exit;
      // echo "vous etes dejà inscrit";
      // return;
    }
  }
}
else {
  header("Location: index.php?msg=Erreur d'identification");
  exit; // important : stop l'execution du script
}


//var_dump($_POST);
 ?>
