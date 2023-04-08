<?php
   //include('dbConfig.php');
   session_start();
   $db = mysqli_connect("localhost","root","","piyush");
   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db, "select email from signup where email = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['email'];

   if(!isset($_SESSION['login_user'])){
      header("location:http://localhost/short1/logout.php");
      die();
   }
?>
