<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject,$body,$email,$name, $html=false){

    //Configuración inicial de nuestro servidor de correos - MailTrap
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '560c68f0f91123';
    $phpmailer->Password = '********2243';

    //Añadiendo destinatarios 
    $phpmailer->setFrom('contact@miempresa.com', 'Mi Empresa - Link Games');  //Quien lo envia.
    $phpmailer->addAddress($email, $name);     // Quien lo recibe.

    //Definiendo el contenido de mi Email
     $phpmailer->isHTML($html);                                  //Set email format to HTML
     $phpmailer->Subject = $subject;
     $phpmailer->Body    = $body;

    //Mandar el Correo.
    try {
        $phpmailer->send();
        //debug de phpmailer
        $phpmailer->SMTPDebug = 2;
    } catch (Exception $e) {
        echo("*-*");
        echo "Error al enviar el correo: {$phpmailer->ErrorInfo}";
    }
}



?>