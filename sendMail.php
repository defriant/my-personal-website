<?php
// import phpmailer
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (!empty($_POST)) {
    // Catch POST value
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Server Setting
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = 'my.skiper.bot@gmail.com';
    $mail->Password = 'bgtnfsmtyteukbwf';
    
    // Recipients
    $mail->setFrom('my.skiper.bot@gmail.com', 'Skiper Bot');
    $mail->addAddress('defriant17@gmail.com', 'Afif Defriant');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = 'Hi, Boss.. <br> <div style="display: flex">You have new message from :<h4 style="margin: 0 0 0 5px">'.$name.'</h4></div> <br> Message : <p style="white-space: pre-line; margin-top: 5px;">'.$message.'</p> <br> Reply to <br> Email : '.$email.'<br> Phone : '.$phone.'<br>';
    
    if ($mail->Send()) {
        echo json_encode(['response' => 'success']);
    }else{
        echo json_encode(['response' => 'failed']);
    }
    
    $mail->smtpClose();
    
}else{
    echo "<div><h1 style='font-weight:500'>403 - FORBIDDEN</h1></div>";
}

?>