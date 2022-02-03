<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
 $g = $_POST['to'];
 $g2 = $_POST['subject'];
 $g3 = $_POST['Body'];
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                            
    $mail->Host       = ' ';     //smtp host            
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = ' ';              //smtp user  
    $mail->Password   = ' ';                               //smtp       pass
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                    //smtp  port                      
    $mail->setFrom('akol@akil.tk', 'AKILBOT');
    $mail->addAddress($g, 'Joe User');    
              
    $mail->isHTML(true);                                 
    $mail->Subject = $g2;
    $mail->Body    = $g3;
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
