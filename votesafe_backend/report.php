<?php
$otp = rand(1000,9999);
require_once('PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth= true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'ambika.singhal99@gmail.com';
$mail->Password = 's0mething@99';
$mail->SetFrom('no-reply@votesafe.gov');
$mail->Subject = 'Your Vote Safe OTP';
$mail->Body = 'Your OTP is '.$otp;
$mail->AddAddress('ambika.singhal99@gmail.com');
$mail->Send();
header('LOCATION: verify.php');
setcookie('otp',$otp);
?>
