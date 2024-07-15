<?php
// Include the header file
require_once('header.php')
?>

<!-- Container for the title -->
<div id="Titre" class="container">
  <div class="fs-1 ms-md-4">Tout Les Plats :</div>
</div>

<!-- Container for the plat carousel -->
<div id="checkplathtml" class="container">
  <div id="platCarousel" class="carousel slide carousel-horizontal" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      // Prepare a SQL query to select plats and their categories
      $stmt = $conn->prepare("SELECT plat.libelle AS platnom, plat.image, plat.description, categorie.libelle AS catnom, plat.id, id_categorie
                              FROM plat LEFT JOIN categorie on plat.id_categorie = categorie.id
                              ". (isset($_GET['numcat'])? "WHERE id_categorie = :id" : ""). "
                              ORDER BY categorie.libelle DESC");
      
      // Bind the parameter if numcat is set in the URL
      if (isset($_GET['numcat'])) {
        $stmt->bindParam(':id', $_GET['numcat']);
      }
      
      try {
        // Execute the query
        $stmt->execute();
      } catch (PDOException $e) {
        // Catch any errors and display the error message
        echo 'Erreur lors de l\'exécution de la requête : '. $e->getMessage();
      }

      // Fetch all the results
      $result = $stmt->fetchAll();

      // Initialize variables for pagination
      $stock = null; 
      $i = 1;
      $nbpage = 1;

      // Start a form that will submit to commande.php
      echo '<form action="commande.php" method="get">';

      // Loop through each plat in the result
      foreach ($result as $plat) {
        // Start a new carousel item every 3 plats
        if ($i % 3 == 1) {
          echo '<div class="carousel-item '. ($i == 1? 'active' : ''). '">';
        }

        // Display the plat card
        echo '<div class="card col-4 flex-row mt-5 mx-md-4" style="width: 30rem; flex: 0 0 30rem;">
                        <img src="../img/food/'. $plat['image']. '" class="rounded-3 img-fluid m-auto" alt="'. $plat['platnom']. 'food" style="width: 10rem; height: fit-content;">
                      <div class="card-body">
                        <h5 class="card-title mt-md-4" text-white>'. $plat['platnom']. '</h5>
                        <p class="card-text">"'. $plat['description']. '"</p>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-secondary rounded-pill btn-lg position-absolute bottom-0 end-0" name="platcom" value="'. $plat['id']. '">Commander</button>
                        </div>
                      </div>
                      </div>';

        // End the carousel item every 3 plats
        if ($i % 3 == 0) {
          echo '</div>';
        }
        $i++;
      };

      // End the form
      echo '</form>';
    ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#platCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#platCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- Include the footer file -->
<?php require_once('footer.php')?>

<!-- Add the CSS to style the carousel horizontally -->
<style>
 .carousel-horizontal.carousel-inner {
    flex-direction: row;
  }

 .carousel-horizontal.carousel-item {
    flex: 0 0 30rem; /* adjust the width to your liking */
    margin-right: 10px; /* add some margin between items */
  }

 .carousel-horizontal.carousel-item.active {
    transform: translateX(0);
  }

 .carousel-horizontal.carousel-item:not(.active) {
    transform: translateX(-100%);
  }
</style>