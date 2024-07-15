<?php
require_once('header.php');
require_once('database.php');
require_once('DAO.php');

// Récupérer les catégories depuis la base de données
$categories = $dao->getCategories();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-4">Nos catégories</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php 
        // Boucle pour afficher chaque catégorie
        foreach ($allCategories as $category): 
        ?>
        <div class="col">
            <div class="card h-100">
                <a href="categorie.php?id=<?php echo $category['id']; ?>">
                    <img src="img/<?php echo $category['image']; ?>" class="card-img-top" alt="<?php echo $category['libelle']; ?>">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $category['libelle']; ?></h5>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>



<?php include 'footer.php'?>

</body>
</html>

  <!-- ICI Mes boutons de carousel -->
  <div class="container-fluid mt-2 mb-2">
    <div class="col">
      <div class="col d-flex justify-content-evenly">
        <button class="carousel-control-prev bg-primary d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="btn btn-dark btn-lg rounded-pill col-md-1" onclick="precedent()" type="button" id="pre">Précédent</button>
        <button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        <button class="btn btn-dark btn-lg rounded-pill col-md-1" onclick="suivant()" type="button" id="nex">Suivant</button>
      </div>
    </div>
  </div>

<?php require_once('../PHP/footer.php')?>




</body>

</html>