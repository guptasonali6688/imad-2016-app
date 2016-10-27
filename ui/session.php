<?php
   include('login.php');
   session_start();
   
   $user_check = $_SESSION['User_name'];
   
   $ses_sql = mysqli_query($db,"select user_name from Website_user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['User_name'];
   
   if(!isset($_SESSION['User_name'])){
      header("location:login-connect.php");
   }
?>