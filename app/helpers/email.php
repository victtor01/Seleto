<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->CharSet = "UTF-8";
$mail->isSMTP();
$mail->Host       = 'smtp.mailtrap.io';
$mail->SMTPAuth   = true;
$mail->Username   = '8e26a14cbda6c9';
$mail->Password   = '8b6ac16bf052a5';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
$mail->Port       =  2525;
$email = $_SESSION['user']['email'];
$name = $_SESSION['user']['name'];

$mail->setFrom('josevictot.ar@gmail.com', 'José Victor');
$mail->addAddress("$email", "$name");

$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Confirmar Email';
$mail->Body    = "<h1> Prezado(a) </h1> <br> <br>  <h2> Agradecemos a solicitação de confimação de email </h2> <a href='localhost:8080/user/confirm/chave/'> Clique nesse link para confirmar seu email </a>";
$mail->AltBody = " Prezado(a) \n\n Agradecemos a solicitação de confimação de email localhost:8080/user/confirm/chave/ Clique nesse link para confirmar seu email";

$mail->send();

echo "deu certo";
redirect('/user');