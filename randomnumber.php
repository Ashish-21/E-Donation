<?php
$randromNumber="";
$otp="";
$i="";
$mail=$_POST['mailid'];
while($i<4)
{
$randomNumber=mt_rand(1,9);
$otp=$otp.$randomNumber;
$i++;
}
echo $otp;
echo $mail;
?>