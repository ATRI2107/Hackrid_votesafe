<?php
	include_once('dbh.inc.php');
	$words = array(
		array("impersonation","impersonate","impersonated","characterization","simulation","falsifying"),
		array("capture","capturing","booth-capturing","hijacked","captured","confiscated"),
		array("murder","kill","murdered","killed","killing","murdering"),
		array("blackmail","blackmailing","blackmailed","threatening","threaten","threatened"),
		array("bribe","bribery","corrupt","corruption","paying","pay")
	);

	$freq = array(0,0,0,0,0);

	function updateFreq($word){
		for($i=0;$i<6;$i++){
			for($j=0;$j<6$j++){
				if(strcmp($word,$word[$i][$j])==0){
					
				}
			}
		}
	}

	$name = 'Ujjwal Sinha';	
	$email = 'u@g.com';
	$voterid = 'awake12345';
	$response = 'teeonifw';
	$type="fsvd";

	$leng = strlen($words);

	for($i=0;$<$leng;$i++){

	}


	if(isset($_POST['submit'])) {

    //Process the image that is uploaded by the user

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.\n";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"]."12345",".jpg");
    echo $image."\n"; // used to store the filename in a variable

    //storind the data in your database
   // $query= "INSERT INTO complains VALUES(NULL,"."'1234567890'".",".'u@u.com'.",".'Forgery attendence'.",".'Forgery attendence'.",".'uploads/'.basename($FILES["imageUpload"]["name"]).");";
    //$query = "INSERT INTO complains VALUES (NULL,'".'$username'."','".'$title'."','".'$domain'."','".'$dd'."','"."uploads/);";
    $query = "INSERT INTO COMPLAINS values(NULL,'".$voterid."','".$email."','".$response."','".$type."','".'uploads/'.basename($_FILES["imageUpload"]["name"])."');";

    mysqli_query($conn,$query);
  

    echo "Your add has been submited, you will be redirected to your account page in 3 seconds....\n";
    header( "Refresh:3; url=index.php", true, 303);
}