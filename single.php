<?php
  session_start();
  //var_dump($_SESSION);
  include("Template/header.php");
  require "Model/function.php";
  $products = getProducts();
  //var_dump($products);
  $single = intval($_GET["id"]);
  //var_dump($single);
?>

 <main class="container">

  <div class="row">
    <div class="col-9 container">
      <div class="row">
        <?php
        foreach ($products as $key => $value) {
          if ($value["id"] === $single) {
            echo "<div class='col-5'>
                    <div class='mb-3' >
                      <img class='img-fluid' src='tile.png' alt='" . $value["name"] . " image'>
                    </div>
                  </div>
                  <div class='col-7'>
                    <div class='card mb-3' >
                      <div class='card-body text-right'>
                        <h2 class='card-title text-left'>" . $value["name"] . "</h2>
                        <p class='card-text text-justify'>" . $value["description"] . " </p>
                        <p class='card-text text-left'>Fabriqué en " . $value["made_in"] . " </p>
                        <p class='card-text text-left'>Catégorie " . ucfirst($value["category"]) . " </p>
                        <h3 class='card-text font-weight-bold'>Prix conseillé : " . $value["price"] . " €</h3>";
                        // Test le stock
                        if ($value["stock"] === true) {
                          echo "<a href='#' class='btn btn-primary w-50'>Ajouter au panier</a>";
                        }else{
                          echo "<div class='alert alert-warning' role='alert'>
                                  Cet article est momentanément indisponible.
                                </div>";
                        }
             echo    "</div>
                    </div>
                  </div>";
          }

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
