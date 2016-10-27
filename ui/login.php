<?php

   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASSWORD', 'bvroot123');
   define('DB_NAME', 'sooad_db');
   
   $db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);/* or die("Failed to connect to MySQL: " . mysql_error());
   $con = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());*/
   /*if (mysqli_connect_errno($db)) {
		
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		
	} 
	else {
		echo "Successfully connected to your database…";
	} */
?>