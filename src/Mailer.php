<?php

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// include phpmailer library files
// require 'vendor/autoload.php';

// create instence of phpmailer 
$mail = new PHPMailer(true); //with error exeption ennabled

try{
    // server settings
    $mail->isSMTP(); //set mailer to use smtp
    $mail->Host = 'smtp.gmail.com'; //specify main and backup server
    $mail->SMTPAuth = true; //enable smtp authentication
    $mail->Username = 'server@mail.com'; //smtp username
    $mail->Password = 'app pass word'; // smtp password that is google app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // recipients
    // sender (server mail)
    $mail->setFrom('server@mail.com', 'server');
    // receiver (client mail)
    $mail->addAddress('client@mial.com', "client");


    // email content 
    $mail->isHTML(true);
    $mail->Subject = 'email verification';
    $mail->Body = 'the verificaiton code is : dfdfj-33jj5-2lkjl-jlkj5l';

    $mail->send();
    echo 'verfication mail sent successfully';
}catch (Exception $e){
    echo "message could not be sent. mailer Error : {$mail->ErrorInfo}";
}


