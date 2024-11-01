<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'path/to/PHPMailer.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.yourhost.com';
$mail->SMTPAuth = true;
$mail->Username = 'your-email@example.com';
$mail->Password = 'your-email-password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your-email@example.com', 'Your Name');
$mail->addAddress('recipient@example.com');
$mail->Subject = 'Test Email via SMTP';
$mail->Body = 'This is a test email sent using SMTP!';

if($mail->send()) {
    echo "Email sent successfully via SMTP!";
} else {
    echo "Email sending failed: " . $mail->ErrorInfo;
}

?>