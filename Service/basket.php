<?php
function getProduct($id){
  $products = getProducts();
  return $products["$id"];
}

function calculBasket($add,$price){
  if (condition) {
    $_SESSION["basketAmount"] += $price;
  }
  else {
    $_SESSION["basketAmount"] -= $price;
  }
}

function addProduct($key){
    // $product = getProduct($key);
    // array_push($product,$product["quantite"]=1);
    // array_push($_SESSION["basket"], $product);
    // calculBasket(true,$product["price"]);


     $key = array_search($name, $_SESSION['basket']);
     echo $key;
     if ($key) {
       echo $_SESSION['basket'][$key]['quantite'];
       //$_SESSION['basket'][$key]['quantite'] += $quantite;
     }
     else{
       $article = array("name"=>$name ,"price"=>$price, "quantite"=>$quantite); //tableau de l'article
       array_push($_SESSION['basket'],$article);
     }

}

function deleteProduct($key){
  calculBasket(false,$_SESSION["basket"][$key]["price"]); //calcul du montant du panier
  unset($_SESSION["basket"][$key]); //supprime la ligne article
  //teste si produit existe dans le panier pour affichage message
  if (count($_SESSION["basket"])>0) {
    header("Location: cart.php?msg=succes");
  }else {
    header("Location: cart.php");
  }
}
 ?>
