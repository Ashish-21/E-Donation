<?php
session_start();
$mail1;

require 'PHPmailer-master/PHPMailerAutoload.php';
$mail1=$_POST['mailid'];
$name="";
$otp="";
$i=1;
while($i<=4)
{
$randomNumber=mt_rand(1,9);
$otp=$otp.$randomNumber;
$i++;
}
//$_SESSION['otp']=$otp;

$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ashishchandwani21@gmail.com';                 // SMTP username
$mail->Password = 'wchamp@2011';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('ashishchandwani21@gmail.com', 'Ashish');
$mail->addAddress($mail1,'Ashish');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'OTP for Verification';
$mail->Body    =  "Your OTP for E-Donation is $otp";
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo $otp;
}
?>
