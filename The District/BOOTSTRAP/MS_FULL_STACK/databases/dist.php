<?php
//Connexion à la base de données
//La première étape consiste à établir une connexion à la base de données en utilisant PDO. 

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}




?>


<?php
//Exécution de requêtes
/*Une fois que la connexion à la base de données est établie, nous pouvons utiliser PDO pour exécuter des requêtes SQL.
Par exemple, si l'on veut sélectionner tous les plats dans la table plat, on écrit la requête SQL suivante :
* */
$stmt = $conn->query("SELECT * FROM plat");  

//Voici comment vous pouvez exécuter cette requête en utilisant le connecteur PDO :
while ($row = $stmt->fetch()) {
    echo $row['libelle'] . "<br>";
}
# ou
$plats = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach($plats as $plat) {
    echo $row->libelle . "<br>";
}
?>

<?php
//Voici, par exemple, comment on prépare une requête pour sélectionner tous les plats d'une catégorie spécifique en utilisant PDO :
$id_categorie = 1;
$stmt = $conn->prepare("SELECT * FROM plat WHERE id_categorie = :id_categorie");
$stmt->bindValue(':id_categorie', $id_categorie);
$stmt->execute();

while ($row = $stmt->fetch()) {
    echo $row['libelle'] . "<br>";
    //Explication: Nous avons utilisé bindValue() pour lier le paramètre :id_categorie à la valeur de la variable $id_categorie.
    // Cela remplace le marqueur de position :id_categorie dans la requête préparée par la valeur de $id_categorie lors de l'exécution. 
}
?>

<?php
//bindValue()
/*The bindValue() method binds a value to a named parameter. This means that the value is immediately evaluated, 
  and the current value of the variable is passed to the query.*/
//Example:
// $stmt = $pdo->prepare("SELECT * FROM commande WHERE libelle = :libelle");
// $libelle = 'example';
// $stmt->bindValue(':libelle', $libelle);
// $stmt->execute();
//In this example, the current value of $libelle is passed to the query. 
//If the value of $libelle is changed later, it will not affect the query.
?>


<?php
/*bindParam()
The bindParam() method binds a variable to a named parameter. This means that the variable itself is passed to the query,
 and its value is evaluated at the time of query execution.*/
//Example:
// $stmt = $pdo->prepare("SELECT * FROM commande WHERE libelle = :libelle");
// $libelle = 'example';
// $stmt->bindParam(':libelle', $libelle);
// $libelle = 'new example'; // changing the value of $libelle
// $stmt->execute();
// /*In this example, the variable $libelle is passed to the query, and its value is evaluated at the time of query execution. 
// Since the value of $libelle was changed to 'new example', the query will use this new value.*/
// ?>

<?php
/*Specifying Data Types with bindParam()*/
// $stmt = $pdo->prepare("SELECT * FROM commande WHERE quantite > :qty");
// $qty = 2; // integer value
// $stmt->bindParam(':qty', $qty, PDO::PARAM_INT);
// $stmt->execute();
/*in this example, we associated the variable $qty with a query parameter named :qty, 
specifying that its value is an integer using the PDO::PARAM_INT constant.*/
?>


<?php
//De même, si nous voulons associer un paramètre de requête à une valeur de chaîne de caractères, 
//nous pouvons utiliser la méthode bindParam() comme suit :
/*$stmt = $pdo->prepare("SELECT * FROM plat WHERE libelle = :libelle");
$libelle = 'pizza'; // donnée de type string (chaîne de caractères)
$stmt->bindParam(':libelle', $libelle, PDO::PARAM_STR);
$stmt->execute();
/*Dans cet exemple, nous avons associé la variable $nom à un paramètre de requête nommé :nom,
 en spécifiant que sa valeur est de type chaîne de caractères en utilisant le troisième argument de la méthode bindParam().*/
?>


<?php
//Pour les nombres à virgule flottante, 
//vous pouvez utiliser le type de données PDO::PARAM_STR et convertir le nombre en chaîne de caractères avec la fonction strval().
$stmt = $pdo->prepare("INSERT INTO produits (nom, prix) VALUES (:nom, :prix)");
$nom = "Mon produit";
$prix = strval(10.50); // convertit 10.50 en chaîne de caractères
$stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
$stmt->bindParam(':prix', $prix, PDO::PARAM_STR);
$stmt->execute();
/* Explication : dans cet exemple, nous avons converti le nombre décimal 10.50 en chaîne de caractères en utilisant la fonction strval().
 Ensuite, nous avons lié la variable $prix à un paramètre de requête nommé :prix en utilisant la méthode bindParam() avec le type de données PDO::PARAM_STR*/

?>

