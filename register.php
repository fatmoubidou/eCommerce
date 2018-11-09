<?php
//var_dump($_POST);
require "Model/function.php";
require "Service/formCleaner.php";
require "Service/login.php";
//var_dump($_POST);
session_start();
$_SESSION["register"] = $_POST;
var_dump($_SESSION["register"]);

$erreur = "";
if (!empty($_POST)) { //si $_POST existe
  //creation de la session Register pour stocker les saisies du form

  if(valueFormEntries($_POST) === false){ //Vérifie si tous le formulaire est rempli
    $erreur .= "1";
  }
  else { //si tout est remplis
    $_POST = cleanFormEntries($_POST);
    $nom = $_POST["nameRegister"];
    $password = $_POST["passwordRegister"];
    $confirmPassword = $_POST["confirm_passwordRegister"];

    //2 - teste du nom
    if (!preg_match("#[a-zA-Z0-9_]{3,}#", $nom)) {
      $erreur .= "2";
    }
    else{echo $nom;}

    //3 - teste du password
    if (!preg_match("#(?=.*\d)(?=.*[A-Z]).{6,}$#", $password)) {
      $erreur .= "3";
    }
    else{echo $password;}

    //4 -teste de confirmation password
    //echo "psw :".$password;
    //echo "confirmpsw :".$confirmPassword;
    if ($confirmPassword != $password) { //si les mots de passe sont différents
      $erreur .= "4";
    }
    else{echo $password;}

    if ($erreur) {
      header("Location: index.php?erreur=".$erreur); //erreur 2, 3 ou 4
      exit;
    }else {
      header("Location: index.php?log=in"); //erreur 2, 3 ou 4
      exit;
    }

  }
  header("Location: index.php?erreur=".$erreur); //erreur 1
  exit;
}
else{
  $erreur .= "0";
  header("Location: index.php?erreur=".$erreur); //erreur 0
  exit; // important : stop l'execution du script
}

 ?>
