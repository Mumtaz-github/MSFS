
<?php
// Vérification des données du formulaire
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Vérification des identifiants (ici, admin/admin)
    if ($login == 'admin' && $password == 'admin') {
        // Initialisation de la variable de session auth
        session_start();
        $_SESSION['auth'] = 'ok';
        header('Location: protected_page.php');
        exit;
    } else {
        // Destruction de la variable de session auth si elle existe
        session_start();
        unset($_SESSION['auth']);
        header('Location: login_form.php');
        exit;
    }
} else {
    header('Location: login_form.php');
    exit;
}
?>






















 <!--here soit i create new  page and past below code , this below code doesn't belong to the above . this page was for the above code-->


<?php
// Vérification des données du formulaire
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $dsn = 'ysql:host=localhost;dbname=mydb';
    $username = 'yuser';
    $password = 'ypassword';

    try {
        $pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo 'Erreur de connexion : '. $e->getMessage();
        exit;
    }

    // Récupération des données de l'utilisateur
    $sql = 'SELECT * FROM user WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Initialisation de la variable de session auth
        session_start();
        $_SESSION['auth'] = 'ok';
        header('Location: protected_page.php');
        exit;
    } else {
        // Destruction de la variable de session auth si elle existe
        session_start();
        unset($_SESSION['auth']);
        header('Location: login_form.php');
        exit;
    }
} else {
    header('Location: login_form.php');
    exit;
}
?>