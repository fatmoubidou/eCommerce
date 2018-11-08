<?php
  session_start();
  if (!isset($_SESSION["user"])) { //teste si la session User existe
    header("Location: index.php");
    exit;
  }
  //var_dump($_SESSION);
  include("Template/header.php");
  //var_dump($products);
?>


  <div class="row">
    <div class="col-9 container">
      <div class="row">
        <div class="container">
          <h2>Votre panier d'achat</h2>

            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <th class="text-left w-50">Article</th>
                  <th>Quantité</th>
                  <th>Montant</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              <tbody>
              <?php
              foreach ($_SESSION["basket"] as $key => $value) {
              ?>
                <tr class="text-center">
                  <td class="text-left"> <a href="single.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></td>
                  <td>
                    <a class="mx-2" href="basket.php?action=update&qte=decrease&key=<?php echo $key ?>"><i class="fas fa-minus"></i></a>
                    <?php echo $value["quantite"] ?>
                    <a class="mx-2" href="basket.php?action=update&qte=increase&key=<?php echo $key ?>"><i class="fas fa-plus"></i></a></td>
                  <td><?php echo $value["price"] * $value["quantite"]; $total += $value["price"] * $value["quantite"]; ?></td>
                  <td><a href="basket.php?action=delete&key=<?php echo $key ?>"><i class="fas fa-times fa-2x"></i></a></td>
                </tr>
              <?php
                }
              ?>
            </tbody>
            <tfoot>
              <tr class="text-right">
                <th colspan="3" >Nombre total de produits : </th>
                <td><?php echo count($_SESSION["basket"]); ?></td>
              </tr>
              <tr class="text-right">
                <th colspan="3" class="text-right">Total : </th>
                <td><?php echo $total; ?></td>
              </tr>
            </tfoot>
          </table>
        </div>
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