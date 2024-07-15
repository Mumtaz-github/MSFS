<?php
require_once 'fonctions.php'; // Include your functions file


   


$db_host = "localhost";
$db_user = "admin";
$db_password = "Afpa1234";
$db_name = "record";

// Fetch all records from the "disc" table
$discs = getDiscs();

$conn = new PDO('mysql:host=localhost;dbname=record', 'admin', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<?php
 require_once('header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des disques</title>
  
    
</head>
<body>
<div class='container mt-3'>
        <div class='row justify-content-center'>
            <div class='h3 text-white col-6'>Liste des disques (17)</div>
            <button type='button' class='btn btn-primary col-5' style="width: 240px;" onclick='window.location="add_form.php"'>Add</button>
        </div>

        <form method='GET' action='details.php' class='mt-3 row justify-content-center'>
  
    <!-- <form action="details.php" method="GET"> -->
    <!-- <h1>Liste des disques</h1>
    <table> -->
        <!-- <thead>
            <tr>
                <th>Titre</th>
                <th>Artiste</th>
                <th>Année</th>
                <th>Genre</th>
                <th>Label</th>
                <th>Actions</th>
            </tr>
        </thead> -->
        <!-- <tbody> -->
        <?php
            //recupere tout les disc dans la base de donnée
        $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id");
               
               $stmt->execute();

               $result = $stmt->fetchAll();
        foreach($result as $row){
                echo '<div class="card mb-3 mx-3 col-6 bg-info-subtle" id="'.$row['disc_id'].'"style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-6">
                <img src="../projet_Crud_record/picture/'.$row['disc_picture'].'" class="img-fluid rounded-start" alt="'.$row['disc_title'].'">
                </div>
            <?php foreach ($discs as $disc): ?>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">'.$row['artist_title'].'</h5>
                    <p class="card-text">'.$row['artist_name'].'</p>
                    <p class="card-text">Label : '.$row['disc_label'].'</p>
                    <p class="card-text">Year : '.$row['disc_year'].'</p>
                    <p class="card-text">Genre : '.$row['disc_genre'].'</p>
                    <button type="submit" name="id" class="btn btn-primary" value='.$row['disc_id'].'>Details</button>
                </div>
                </div>
                </div>
            </div>';
                };
                ?>
                </form>
                </div>
               <!-- <tr>
                    <td>< ?php echo $disc['disc_title']; ?></td>
                    <td>< ?php echo $disc['disc_artist']; ?></td>
                    <td>< ?php echo $disc['disc_year']; ?></td>
                    <td>< ?php echo $disc['disc_genre']; ?></td>
                    <td>< ?php echo $disc['disc_label']; ?></td>
                    <td> -->
                        <!-- <button type='submit' name="id" value="< ?php echo $disc['disc_id']; ?>" >Détails</button> -->
                    <!-- </td>
                </tr> -->
            <!-- < ?php endforeach; ?> -->
        <!-- </tbody> -->
    <!-- </table> --> 
   
    <!-- <a href="add_form.php">Ajouter un disque</a> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>