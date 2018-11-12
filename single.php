<?php
  session_start();
  if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
  }
  //var_dump($_SESSION);
  include("Template/header.php");
  require "Model/function.php";
  $products = getProducts();
  //var_dump($products);
  $single = intval($_GET["id"]);
  //var_dump($single);
  if (isset($_GET["msg"])) {
    $msg = $_GET["msg"];
  }

?>

  <div class="row">
    <div class="col-9 container">
      <div class="row">
        <?php
        foreach ($products as $key => $value) {
          if ($value["id"] === $single) {
        ?>
            <div class='col-5'>
              <div class='mb-3' >
                <img class='img-fluid' src='tile.png' alt='<?php echo $value["name"] ?> image'>
              </div>
            </div>
            <div class='col-7'>
              <div class='card mb-3' >
                <div class='card-body text-right'>
                  <h2 class='card-title text-left'><?php echo $value["name"] ?> </h2>
                  <p class='card-text text-justify'><?php echo $value["description"] ?>  </p>
                  <p class='card-text text-left'>Fabriqué en <?php echo $value["made_in"] ?>  </p>
                  <p class='card-text text-left'>Catégorie <?php echo ucfirst($value["category"]) ?>  </p>
                  <h3 class='card-text font-weight-bold'>Prix conseillé : <?php echo $value["price"] ?>  €</h3>
                  <?php
                  // Test le stock
                  if ($value["stock"]) { ?>
                    <a href='basket.php?action=add&id=<?php echo $value["id"] ?> ' class='btn btn-primary w-50'>Ajouter au panier</a>
                  <?php }else{ ?>
                    <div class='alert alert-warning' role='alert'>
                      Cet article est momentanément indisponible.
                    </div>
                  <?php } ?>
               </div>
              </div>
              <?php if (isset($_GET["msg"]) && $_GET["msg"] === "succes") { ?>
                <div class='alert alert-success text-center' role='alert'>
                  L'article est ajouté au panier avec succès.
                </div>
              <?php } ?>
            </div>
        <?php
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


 <?php
   include("Template/footer.php");
 ?>
