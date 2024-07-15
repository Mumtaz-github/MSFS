<?php
require_once('fonctions.php'); // Include your functions file
// $db_name = "record";

// $dsn = "mysql:host=localhost;dbname=record;charset=utf8";
// $db_user = "admin";
// $db_password = "Afpa1234";
$db_host = "localhost";
$db_user = "admin";
$db_password = "Afpa1234";
$db_name = "record";
echo $_GET['id'];

try {
    $db = new PDO('mysql:host=localhost;dbname=record;charset=utf8', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $db->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE d.disc_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $album = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($album)) {
            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Détails du disque</title>
              
               
            </head>
            <body>
                <h1>Détails du disque <?php echo $album['disc_title'];?></h1>
                <img src="pictures/<?php echo $album['disc_picture'];?>" alt="<?php echo $album['disc_title'];?>">
                <div>
                    <!-- <p>Titre : < ?php echo $album['disc_title']; ?></p>*/ -->
                    <p>Artiste : <?php echo $album['artist_name']; ?></p>
                    <p>Année : <?php echo $album['disc_year']; ?></p>
                    <p>Genre : <?php echo $album['disc_genre']; ?></p>
                    <p>Label : <?php echo $album['disc_label']; ?></p>
                    <p>Prix : <?php echo $album['disc_price']; ?></p>
                   
                </div>
                <a href="update_form.php?disc_id=<?php echo $album['disc_id']; ?>">Modifier</a>
                <a href="delete_form.php?disc_id=<?php echo $album['disc_id']; ?>">Supprimer</a>
                <a href="index.php">Retour</a>
            </body>
            </html>
            <?php
        } else {
            echo "Disque non trouvé avec cet ID";
        }

    } else {
        echo "Erreur : disque manquant.";
    }

} catch(PDOException $e) {
    echo "Erreur de connexion : ". $e->getMessage();
}
?>