<?php
  session_start();
  if (!isset($_SESSION["user"])) { //teste si la session User existe
    header("Location: index.php");
    exit;
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
        ?>
                <div class="col-4">
                  <div class="card mb-3" >
                    <img class="card-img-top" src="tile.png" alt="<?php echo $value["name"] ?>">
                    <div class="card-body">
                      <h5 class="card-title"> <?php echo $value["name"] ?></h5>
                      <p class="card-text text-right"><?php echo  $value["price"] ?> € </p>
                      <a href="single.php?id=<?php echo $value["id"] ?>" class="btn btn-primary">Voir le détails</a>
                    </div>
                  </div>
                </div>
        <?php
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
