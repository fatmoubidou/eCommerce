<?php


function addProduct($name,$price,$quantite){
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

 ?>
