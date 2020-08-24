<!-- NEED TO CONFIGURE GOOGLE GMAIL SERVER TO LET SEND E-MAIL 
        Google account;
        Security tab;
        2FA toggle on.
-->

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
$mail = new PHPMailer;

$mail->SMTPDebug = 3; 
$mail->isSMTP(); 
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;                          
$mail->Username = "name@gmail.com";                 
$mail->Password = "super_secret_password";                           
$mail->SMTPSecure = "tls";                           
$mail->Port = 587;  
$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

$mail->addAddress("recepient1@example.com", "Recepient Name"); //Recipient name is optional
$mail->addReplyTo("reply@yourdomain.com", "Reply");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}

?>