 <?php]
  include 'db-login.php';
  session_start();
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
	
	$r = mysql_num_rows($result);
	
	if($r == 1){
		$_SESSION['User_name'] = $uname;
		header:('Location:welcome_.php');
	}else
	{
		echo "Acount is invalid";
	}
 
 ?>