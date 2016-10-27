<?php
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'sooad_db'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD','bvroot123'); 
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

	function NewUser()
	{ 
		$Full_name = $_POST['name']; 
		$User_name = $_POST['user']; 
		$Email = $_POST['email']; 
		$pass = $_POST['pass'];
		
		$query = "INSERT INTO website_user (Full_name,User_name,Email,pass)
				  VALUES ('$Full_name','$User_name','$Email','$pass')";
				  
	    $data = mysql_query ($query)or die(mysql_error()); 
				  
			if($data)
			{ 		
					echo "<h1>WELCOME !!</h1>";
					include 'log-home.php';
			} 
	} 
	
	function SignUp() 
	{ 
		if(!empty($_POST['user'] and $_POST['pass'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
		{ 
			$query = mysql_query
					(
						"SELECT * FROM Website_user 
						WHERE User_name = '$_POST[user]' AND pass = '$_POST[pass]'
						"
					) 
					or
					die(mysql_error());

					if(!$row = mysql_fetch_array($query) or die(mysql_error()))
					{ 
						NewUser();
						} 
					else 
					{ 
						echo "SORRY... ALREADY REGISTERED USER... PLEASE TRY DIFFERENT USER_NAME"; 
					} 
		} 
	} 
	
	if(isset($_POST['submit'])) 
	{ 
		SignUp();
		
		}

?> 

