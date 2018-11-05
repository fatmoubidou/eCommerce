<?php
  session_start();
  if (empty($_SESSION)) {
    header("Location: index.php");
  }
  //var_dump($_SESSION);
  include("Template/header.php");
  require "Model/function.php";
  $products = getProducts();
  //var_dump($products);
?>


  <div class="row">
    <div class="col-9 container">
      <div class="row">
        <?php
        foreach ($products as $key => $value) {
          echo "<div class='col-4'>
                  <div class='card mb-3' >
                    <img class='card-img-top' src='tile.png' alt='" . $value["name"] . " image'>
                    <div class='card-body'>
                      <h5 class='card-title'>" . $value["name"] . "</h5>
                      <p class='card-text text-right'>" . $value["price"] . " €</p>
                      <a href='single.php?id=" . htmlspecialchars($value["id"]) . "' class='btn btn-primary'>Voir le détails</a>
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

 <?php
   include("Template/footer.php");
 ?>
