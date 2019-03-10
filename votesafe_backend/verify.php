<?php
$otp = $_COOKIE['otp'];
echo('
  	<form action = "confirm.php" method = "POST">
    <input type = "text" name = "otp" placeholder ="Enter OTP">
    <div><Button>SUBMIT</Button></div>
    </form>
	');
?>