<?php
  session_start();
  if (!isset($_SESSION["user"])) { // Si la session User n'existe pas
    header("Location: index.php"); // Redirection vers la page de connexion
    exit;
  }
  //var_dump($_SESSION);
  include("Template/header.php");
  //require "Model/function.php";
  //$products = getProducts();
  //var_dump($products);

  try
    {$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'phpmyadmin', 'asma2012');}
  catch (Exception $e)
    {die('Erreur : ' . $e->getMessage());}

  // On récupère tout le contenu de la table product
  $reponse = $bdd->query('SELECT * FROM Product');
?>
  <div class="row">
    <div class="col-9 container">
      <div class="row">
        <?php
        // On affiche chaque entrée une à une
        while ($value = $reponse->fetch())
        {
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
        $reponse->closeCursor(); // Termine le traitement de la requête
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
