












<!--Exemple 2-->

<h2>Nous allons maintenant concevoir une page permettant d'afficher le détail d'un disque. Le numéro d'un disque sera passé en paramètre de la page.

Si la page se nomme details_disc.php, elle sera déclenchée de cette façon:</h2>
<?php
    $db = new PDO ('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_name ?>
    Disc year <?= $disc->disc_year ?>
</body>
</html>