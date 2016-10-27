<?php

	include("db-login.php");

	//get the value pass from login form into login_.php

	$uname = $_POST['uname'];
	$psw = $_POST['psw'];

	// to prevent sql imjection
	$uname = stripcslashes($uname);
	$psw = stripcslashes($psw);

	$uname = mysql_real_escape_string($uname);
	$psw = mysql_real_escape_string($psw);

	//query the database for user_error
	$result = mysql_query("select * from website_user where User_name='$uname' AND pass ='$psw'") or die("Failed to query database".mysql_error());

	$row = mysql_fetch_array($result);

	if($row['User_name']== $uname && $row['pass']== $psw) {
			echo "<h1>Welcome ".$row['User_name']." !!</h1>";
			include "log-home.php";
	
	}
	else {
		echo "Failed to login";
	}


?>