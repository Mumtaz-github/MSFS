<?php
require_once 'vendor/autoload.php';

$mail = new \PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'localhost';
$mail->Port = 1025;
$mail->SMTPAuth = false;

$mail->setFrom('from@thedistrict.com', 'The District Company');
$mail->addAddress('recipient@example.com', 'Recipient Name');
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email';

if (!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent successfully';
}