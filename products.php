<?php
  session_start();
  //var_dump($_SESSION);
  include("Template/header.php");


  require "Model/function.php";
  $products = getProducts();
  //var_dump($products);
?>

 <main class="container">
  <div class="row">
    <div class="col-8 container">
      <div class="row">
        <?php
        foreach ($products as $key => $value) {
          echo "<div class='col'>
                  <div class='card' >
                    <img class='card-img-top' src='tile-wide.png' alt='" . $value["name"] . " image'>
                    <div class='card-body'>
                      <h5 class='card-title'>" . $value["name"] . "</h5>
                      <p class='card-text text-right'>" . $value["price"] . " €</p>
                      <a href='single.php?" . $value["id"] . "' class='btn btn-primary'>Voir le détails</a>
                    </div>
                  </div>
                </div>";
        }
        ?>
      </div>
    </div>
    <!-- Aside -->
    <?php
      include("Template/aside.php");
    ?>
  </div>
</main>

 <?php
   include("Template/footer.php");
 ?>
