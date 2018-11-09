<?php
//var_dump($_POST);
require "Model/function.php";
require "Service/formCleaner.php";
require "Service/login.php";

//Vérifie si le formulaire est rempli
if (!empty($_POST)) {
  $_POST = cleanFormEntries($_POST);
  // foreach ($_POST as $key => $value) {
  //   $_POST[$key] = htmlspecialchars("$value") ; //sécurise les saisies du formulaire
  // }

  $users = getUsers();
  //var_dump($users);
  if (userIsRegistered($users, $_POST)) {
    header("Location: products.php");
    exit;
  }
  else {
    header("Location: index.php?msg=Erreur d'identification");
    exit; // important : stop l'execution du script
  }

  // foreach ($users as $key => $user) {
  //   // Test de l'authentification
  //   if($user["name"] === $_POST["name"] && $user["password"] === $_POST["password"]){
  //     session_start();
  //     $_SESSION["user"] = $user;
  //     header("Location: products.php");
  //     exit;
  //   }
  // }
  // header("Location: index.php?msg=Erreur d'identification");
  // exit; // important : stop l'execution du script
}
else {
  header("Location: index.php?msg=Veuillez saisir vos identifiants");
  exit; // important : stop l'execution du script
}

 ?>
