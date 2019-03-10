<?php
$orotp = $_COOKIE['otp'];
$usotp = $_POST['otp'];
if($orotp==$usotp){
	header('LOCATION: confirmyes.php');
}
else{
	header('LOCATION: confirmno.php');
}
?>