<?php
require_once 'Exception.php';
require_once 'OAuth.php';
require_once 'SMTP.php';
require_once 'PHPMailer.php';




$mail = new \PHPMailer\PHPMailer\PHPMailer();

$mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
$mail->SMTPDebug = 4; //Alternative to above constant
$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP
$mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'adrarformationtamagotweet@gmail.com'; // Votre adresse email d'envoi
$mail->Password = 'ADRAR1112'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = 'ssl'; // Accepter SSL
$mail->Port = 465;

$mail->setFrom('adrarformationtamagotweet@gmail.com', 'Mailer'); // Personnaliser l'envoyeur
$mail->addAddress('adrarformationtamagotweet@gmail.com', 'Karim User'); // Ajouter le destinataire

$mail->addReplyTo('adrarformationtamagotweet@gmail.com','Information'); // L'adresse de réponse




$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'confirme le tweet';
$mail->Body = "j'ai bien reçu le tweet,bois une duff";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}

?>