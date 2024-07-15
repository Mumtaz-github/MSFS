<?php
// Vérification des données du formulaire
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Vérification des données
    if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($password_confirm)) {
        echo 'Tous les champs sont obligatoires';
        exit;
    }

    if ($password!= $password_confirm) {
        echo 'Les mots de passe ne correspondent pas';
        exit;
    }

    // Hashage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connexion à la base de données
    $dsn = 'mysql:host=localhost;dbname=mydb';
    $username = 'yuser';
    $password = 'ypassword';

    try {
        $pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo 'Erreur de connexion : '. $e->getMessage();
        exit;
    }

    // Insertion des données dans la table user
    $sql = 'INSERT INTO user (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->execute();

    echo 'Inscription réussie!';
    exit;
} else {
    header('Location: register_form.php');
    exit;
}
?>