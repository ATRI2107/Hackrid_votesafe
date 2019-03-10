<?php
$signup = $_GET['signup'];
if($signup==1){	
$host ="localhost";
$dbusername ="root";
$dbpassword ="ambika10081999";
$databasename ="login";
$mysqlconnect = mysql_connect($host,$dbusername,$dbpassword);
$dbselect = mysql_select_db($databasename,$mysqlconnect);

if($mysqlconnect){
	if($dbselect){
		$dbsucess = 1;
	}
	else{
		$dbsucess =0;
	}
}
else{
	$dbsucess = 0;
}
if($dbsucess==1){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(isset($username)&&isset($password)){
		if(!empty($username)&&!empty($password)){
			if(strlen($password)<=10&&strlen($password)>=5){
	$pret = "INSERT INTO login_credentials values ('".$username."','".$password."');";
	$pretrieve = mysql_query($pret);
	if($pretrieve){
	echo('New Account Created');
		}
		else{
			echo('
<form action = "login.php?login=1" method = "POST">
    <div class="form-group"><input type = "text" name = "username" placeholder ="username" class="form-control"></div>
    <div class ="form-group"><input type ="password" placeholder ="password" name = "password" class="form-control"></div>
    <div class ="form-group"><Button class ="btn btn-large btn-primary btn-block">Login</Button></div>
    </form>
	<br>
	Username already exists!
');
			
			
		}
}
else{
	echo('
<form action = "login.php?login=1" method = "POST">
    <div class="form-group"><input type = "text" name = "username" placeholder ="username" class="form-control"></div>
    <div class ="form-group"><input type ="password" placeholder ="password" name = "password" class="form-control"></div>
    <div class ="form-group"><Button class ="btn btn-large btn-primary btn-block">Login</Button></div>
    </form>
	<br>
	Password must be between 5 and 10 characters!
');
	
}
		}
else{
	echo('
<form action = "register.php?login=1" method = "POST">
    <div class="form-group"><input type = "text" name = "username" placeholder ="username" class="form-control"></div>
    <div class="form-group"><input type = "text" name = "voterid" placeholder ="voterid" class="form-control"></div>
    <div class ="form-group"><Button class ="btn btn-large btn-primary btn-block">Submit</Button></div>
    </form>
	<br>
');
}
}
}
}
elseif($signup==0){
	echo('
<form action = "signup.php?signup=1" method = "POST">
    <div class="form-group"><input type = "text" name = "username" placeholder ="username" class="form-control"></div>
    <div class ="form-group"><input type ="password" placeholder ="password" name = "password" class="form-control"></div>
    <div class ="form-group"><Button class ="btn btn-large btn-primary btn-block">Login</Button></div>
    </form>
');
	
}
?>