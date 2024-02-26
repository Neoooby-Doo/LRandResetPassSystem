<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  #Require some files from PHPMailer
  
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

function send_mail($recipient,$subject,$message)
{

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "khanumrani725@gmail.com"; #Enter E-mail Address
  $mail->Password   = "zaxjtkcqufjgyoni"; #Enter App Password

  $mail->IsHTML(true);
  $mail->AddAddress($recipient, "User");
  $mail->SetFrom("khanumrani725@gmail.com", "Login & Registration System"); 
  $mail->Subject = $subject;
  $content = $message;

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    return false;
  } else {
    return true;
  }

}

?>