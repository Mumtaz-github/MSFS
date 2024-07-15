<?php
require_once 'fonctions.php'; // Include your functions file

// Check if a disc ID is provided
if (isset($_GET['disc_id'])) {
    $disc_id = $_GET['disc_id'];

    // Fetch details of the selected disc
    $disc = getDiscById($disc_id);

    if ($disc) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Supprimer un vinyle</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <h1>Supprimer un vinyle</h1>
            <p>Êtes-vous sûr de vouloir supprimer ce disque ?</p>
            <p>Titre : <?php echo $disc['title']; ?></p>
            <form method="post" action="delete_script.php">
                <input type="hidden" name="disc_id" value="<?php echo $disc['disc_id']; ?>">
                <button type="submit">Supprimer</button>
            </form>
            <a href="details.php?disc_id=<?php echo $disc['disc_id']; ?>">Retour</a>
        </body>
        </html>
        <?php
    } else {
        echo "Disque non trouvé.";
    }
} else {
    echo "ID du disque manquant.";
}
?>