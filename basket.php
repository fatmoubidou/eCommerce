<?php
session_start();
require "Service/login.php";
require "Service/basket.php";
require "Model/function.php";

$action = $_GET["action"];
$cle = intval($_GET["key"]); //cle de la ligne article dans le panier
$actionQte = $_GET["qte"];
$single = intval($_GET["id"]); //id de l'article
$products = getProducts();
$product;

foreach ($products as $key => $value) {
  if ($value["id"] === $single) {
    $product = $value;
  }
}


//var_dump($product);
var_dump($_SESSION["basket"]); echo "<br>";

$product_id = array_column($_SESSION["basket"], "id"); //tableau des id articles
var_dump($product_id); echo "<br>";

$key = array_search($product["id"], $product_id); //recupere la position de l'id s'il existe
var_dump($key); echo "<br>";

switch ($action) {
    case "add":
          if ($key === false) { //teste si l'article existe
          //echo "Ajout article";
          $article = array("id"=>$product["id"], "name"=>$product["name"], "price"=>$product["price"], "quantite"=>1); //tableau de l'article
          array_push($_SESSION['basket'],$article); //ajoute l'article dans le panier
          }
        else{
          //echo "Quantite";
          $_SESSION["basket"][$key]["quantite"]+=1; //ajoute 1 à l'article
          }

            //addProduct($value["name"],$value["price"],1);
            //var_dump($_SESSION["basket"]);
        header("Location: single.php?id=".$product["id"]."");
        exit;
        break;
    case "delete":
        unset($_SESSION["basket"][$cle]); //supprime la ligne article
        header("Location: cart.php");
        exit;
        break;
    case "update":
        if ($actionQte === "increase") {
          $_SESSION["basket"][$cle]["quantite"]+=1; //ajoute 1 à l'article
        }
        elseif ($actionQte === "decrease") {
          if ($_SESSION["basket"][$cle]["quantite"]> 0) {
            $_SESSION["basket"][$cle]["quantite"]-=1; //diminue 1 à l'article
            if($_SESSION["basket"][$cle]["quantite"] === 0){
              unset($_SESSION["basket"][$cle]); //supprime l'article du panier si la quantite = 0
            }
          }
        }
        header("Location: cart.php");
        exit;
        break;
}





//   }
// }
?>
