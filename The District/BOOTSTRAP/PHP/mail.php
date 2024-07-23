<!-- < ?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP
$mail->SMTPAuth   = false;    

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;                                   

// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress("client1@example.com", "Mr Client1");
$mail->addAddress("client2@example.com"); 

//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

//CC & BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);

// On ajoute la/les pièce(s) jointe(s)
$mail->addAttachment('img/asian-food-cat.jpg');

// Sujet du mail
$mail->Subject = 'Test PHPMailer';

// Corps du message
$mail->Body = "On teste l'envoi de mails avec PHPMailer";

// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
    } -->


     <?php
     //echo "Mail.php file executed"; this one for test that phpmailer work or not
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomCommande = $_POST["NomPrenom"];
    $prenomCommande = $_POST["NomPrenom"];
    $emailCommande = $_POST["email"];
    $phoneCommande = $_POST["phone"];
    $adressCommande = $_POST["demande"];
    $libelle = $_POST["libelle"];
    $prixUnitaire = $_POST["prixUnitaire"];
    $quantite = $_POST["quantite"];
    $total = $_POST["prixUnitaire"] * $_POST["quantite"];

    $mail = new PHPMailer(true);

    // Configure PHPMailer
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025;
    $mail->SMTPAuth = false;

    $mail->setFrom('from@thedistrict.com', 'The District Company');
    $mail->addAddress($emailCommande);

    $contenu = <<< CMD
    NomPrenom $nomCommande $prenomCommande
    Email: $emailCommande
    phone: $phoneCommande
    demande: $adressCommande

    Votre commande:
    libelle : $libelle
    prix: $prixUnitaire
    quantite: $quantite
    total: $total
    CMD;

    $mail->Subject = 'Votre commande';
    $mail->Body = $contenu;

    try {
        $mail->send();
        echo 'Email envoyé avec succès';
    } catch (Exception $e) {
        echo "Sending email failed. The following error occurred : ", $mail->ErrorInfo;
    }
}
?>