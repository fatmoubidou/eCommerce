<?php
//var_dump($_POST);
require "Model/function.php";
require "Service/formCleaner.php";
require "Service/login.php";

//Vérifie si le formulaire est rempli
if (!empty($_POST)) {
  if(!valueFormEntries($_POST)){ //teste la value de tous les champs du form
    header("Location: index.php?erreur=1"); // si un seul champs est vide on retourne une erreur
    exit;
  }
  else {
    $_POST = cleanFormEntries($_POST);
    $nom = $_POST["nameRegister"];
    $password = $_POST["passwordRegister"];

    //teste du nom
    if (!preg_match("#[a-zA-Z0-9_]{3,}#", $nom)) {
      //echo $nom;
      header("Location: index.php?erreur=2");
      exit;
    }
    else{echo $nom;}

    //teste du password
    //^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$
    if (!preg_match("#(?=.*\d)(?=.*[A-Z]).{6,}$#", $password)) {
      //echo $nom;
      header("Location: index.php?erreur=3");
      exit;
    }
    else{echo $password;}

    //teste de confirmation password
    //^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,}$
    if (!preg_match("#(?=.*\d)(?=.*[A-Z]).{6,}$#", $password)) {
      //echo $nom;
      header("Location: index.php?erreur=3");
      exit;
    }
    else{echo $password;}


  }

}
else{
  header("Location: index.php?erreur=0");
  exit; // important : stop l'execution du script
}

 ?>
