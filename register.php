<?php
//var_dump($_POST);
require "Model/function.php";
require "Service/formCleaner.php";
require "Service/login.php";

$erreur = "";
if (!empty($_POST)) { //si $_POST existe
  if(valueFormEntries($_POST) === false){ ////Vérifie si tous le formulaire est rempli
    $erreur .= "1";
    // header("Location: index.php?erreur=1"); // si un seul champs est vide on retourne une erreur
    // exit;
  }
  else { //si tout est remplis
    $_POST = cleanFormEntries($_POST);
    $nom = $_POST["nameRegister"];
    $password = $_POST["passwordRegister"];
    $confirmPassword = $_POST["confirm_passwordRegister"];

    //2 - teste du nom
    if (!preg_match("#[a-zA-Z0-9_]{3,}#", $nom)) {
      $erreur .= "2";
      // header("Location: index.php?erreur=2");
      // exit;
    }
    else{echo $nom;}

    //3 - teste du password
    if (!preg_match("#(?=.*\d)(?=.*[A-Z]).{6,}$#", $password)) {
      $erreur .= "3";
      // header("Location: index.php?erreur=3");
      // exit;
    }
    else{echo $password;}

    //4 -teste de confirmation password
    echo "psw :".$password;
    echo "confirmpsw :".$confirmPassword;
    if ($confirmPassword != $password) { //si les mots de passe sont différents
      $erreur .= "4";
      // header("Location: index.php?erreur=4");
      // exit;
    }
    else{echo $password;}

    header("Location: index.php?erreur=".$erreur);
    exit;

  }
  header("Location: index.php?erreur=".$erreur);
  exit;
}
else{
  $erreur .= "0";
  header("Location: index.php?erreur=".$erreur);
  exit; // important : stop l'execution du script
}

 ?>
