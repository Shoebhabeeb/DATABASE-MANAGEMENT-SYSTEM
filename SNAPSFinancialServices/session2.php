<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['login_user1'];
   $ses_sql = mysqli_query($db,"select adminuser from admin where adminuser = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session1 = $row['adminuser'];
   
   if(!isset($_SESSION['login_user1'])){
      header("location:login.php");
   }
?>