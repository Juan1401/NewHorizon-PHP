<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subjec,$body,$email,$name, $html=false){

    //Configuración inicial de nuestro servidor de correos - MailTrap
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '314009ac2d1f15';
    $phpmailer->Password = '********4869';

    //Añadiendo destinatarios 
    $phpmailer->setFrom('contact@miempresa.com', 'Mi Empresa - Link Games');  //Quien lo envia.
    $phpmailer->addAddress($email, $name);     // Quien lo recibe.

    //Definiendo el contenido de mi Email
     $phpmailer->isHTML($html);                                  //Set email format to HTML
     $phpmailer->Subject = $subjec;
     $phpmailer->Body    = $body;

    //Mandar el Correo.
     $phpmailer->send();
}



?>