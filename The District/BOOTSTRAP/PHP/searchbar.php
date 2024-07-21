<?php
// searchbar.php
require_once('database.php');
require_once('DAO.php');

// Get the search query from the URL parameter
$search_query = $_GET['q'];

// Query the database to retrieve the search results
$search_queries = array("Pizza", "Burger", "Buffalo Chicken Wrap", "Spaghetti aux légumes", "Salade");

$query = "SELECT *, 
             (libelle RLIKE '[[:<:]]".$search_query."[[:>:]]' OR description RLIKE '[[:<:]]".$search_query."[[:>:]]') AS match_found,
             (CASE 
                WHEN libelle RLIKE '[[:<:]]".$search_query."[[:>:]]' THEN 2 
                WHEN description RLIKE '[[:<:]]".$search_query."[[:>:]]' THEN 1 
                ELSE 0 
             END) AS relevance 
          FROM plat 
          WHERE libelle RLIKE '[[:<:]]".$search_query."[[:>:]]' OR description RLIKE '[[:<:]]".$search_query."[[:>:]]' 
          ORDER BY relevance DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();

// foreach ($results as $row) {
//     echo "<h2>" . $row['libelle'] . "</h2>";
//     echo "<p>" . $row['description'] . "</p>";
//     echo "<img src='" . $row['image'] . "' alt='" . $row['libelle'] . "'>";
//     echo "<br><br>";
// }




// Check if there are any results
if (count($result) > 0) {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Résultats de recherche</title>
    <style>
      .pizza-card {
        width: 250px;
        margin: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .pizza-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
      }
    </style>
  </head>
  <body>
    <h1>Résultats de recherche pour "<?php echo $search_query;?>"</h1>
    <div class="search-results">
      <?php
      foreach ($result as $row) {
        ?>
        <div class="pizza-card">
          <img src="<?php echo $row['image'];?>" alt="<?php echo $row['libelle'];?>">
          <h2><?php echo $row['libelle'];?></h2>
          <p><?php echo $row['description'];?></p>
          <p>Prix: <?php echo $row['prix'];?> €</p>
        </div>
        <?php
      }
      ?>
    </div>
  </body>
  </html>
  <?php
} else {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Aucun résultat trouvé</title>
  </head>
  <body>
    <h1>Aucun résultat trouvé pour "<?php echo $search_query;?>"</h1>
    <p>Désolé, nous n'avons trouvé aucun résultat correspondant à votre recherche.</p>
  </body>
  </html>
  <?php
}

// Close the database connection (not needed with PDO)
$conn = null; // instead, set the connection to null to release resources
?>