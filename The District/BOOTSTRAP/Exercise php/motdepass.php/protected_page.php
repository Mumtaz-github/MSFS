<?php
// Vérification de la présence de la variable de session auth
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 'ok') {
    header('Location: login_form.php');
    exit;
}

// Si la variable de session auth est présente et contient la valeur ok, alors l'utilisateur est authentifié
echo 'Page protégée, vous êtes authentifié !';
?>