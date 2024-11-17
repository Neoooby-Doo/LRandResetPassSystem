<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($recipient, $subject, $message)
{
    $mail = new PHPMailer();
    $mail->isSMTP();

    // SMTP settings
    $mail->SMTPDebug  = 0; // Debugging off for production (use 2 for verbose debugging)
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->SMTPSecure = 'tls'; // Encryption type (use 'ssl' if required)
    $mail->Port       = 587; // SMTP port (use 465 for SSL)
    $mail->Host       = '...'; // SMTP server
    $mail->Username   = '...'; // Your full email address
    $mail->Password   = '...'; // E-mail Password (N.B. App Password for Gmail)

    // Email settings
    $mail->isHTML(true); // Send email in HTML format
    $mail->addAddress($recipient, "User"); // Recipient's email and name
    $mail->setFrom('....', '....'); // Sender's email and name
    $mail->Subject = $subject; // Email subject
    $mail->Body    = $message; // Email content

    // Send email and return status
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}
?>
