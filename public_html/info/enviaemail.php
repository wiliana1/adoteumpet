<?php
header('Content-Type: text/html; charset=UTF-8');
/**
 * This example shows sending a message using a local sendmail binary.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/OAuth.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/POP3.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

function enviaemail($email,$msg,$nome){
//Create a new PHPMailer instance
$mail = new PHPMailer(true);
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    //$mail->isSMTP();                                            // Send using SMTP
    //$mail->isSendmail();
$mail->Host       = 'smtp.hostinger.com.br';                // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'recrutamento@boot.ecttion.com';               // SMTP username
$mail->Password   = 'Mpa22068412';                             // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';
$headers .= "Content-Type: text/html; charset=UTF-8" .$quebra_linha;
//Set who the message is to be sent from
$mail->setFrom('recrutamento@boot.ecttion.com', 'Equipe Ecttion');
//Set an alternative reply-to address
//$mail->addReplyTo('mpa700@hotmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($email, $nome);
//Set the subject line
$mail->Subject = 'Seja Bem vindo ao Grupo Ecttion';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->Header = "Content-Type: text/html; charset=UTF-8";
$mail->Headers = "Content-Type: text/html; charset=UTF-8";
$mail->Body    = $msg;
$mail->AltBody = 'Revendedor autorizado';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
$mail->Send();
  //echo "Message Sent OK\n";
  
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
  
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
  
}
}


?>
