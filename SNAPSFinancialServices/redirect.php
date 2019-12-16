<?php
include('config.php');
include('session.php');
$value=$_SESSION['accountnumber'];
if(isset($_POST['update'])){
	$pass = $_POST['password'];
	$pass1 = $_POST['password1'];
	
	if($pass == $pass1){
	if (strlen($pass) < 6) {
        echo "<script>alert('password size less than 6');</script>";
    }
    else if (!preg_match("#[0-9]+#", $pass)) {
       echo "<script>alert('at least one number');</script>";
    }
    else if (!preg_match("#[a-zA-Z]+#", $pass))  
        echo "<script>alert('at least one letter');</script>";
	else{
	$sql7 = "INSERT INTO `security` (`accnumber`, `password`) VALUES ('$value', '$pass'); ";
	$result7 = mysqli_query($db,$sql7);}
	if($result7){
	echo"<script>alert('Updation Successfull');</script>";
	echo '<meta http-equiv="refresh" content="0;fundtransfer.php" />';
	}	
	else{echo"<script>alert('PASSWORD MISS MATHCH');</script>";}
}
}
?>
 <head>
   <div class = "main">
     <link rel='stylesheet' href="testme.css">
	 
      <title>SNAPS Financial Services</title>
	  <link rel="shortcut icon" href="icon.jpg" />
	   <div align = "center">
        <img src="icon.jpg" style="width: 50px;height: 50px;" >
		<h1> SNAPS Financial Services </h1>
    </div>
	</div>

<div class="head">
	<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
		<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>SET YOUR TOP SECURITY PASSWORD</b></div>
<table align="center" width="500px" cellpadding="5" cellspacing="5">

<tr>
<td>Password</td>
<td><input type="password" name="password" required  class = "box"/></td>
</tr>
<tr>
<td>Re-Enter Password</td>
<td><input type="password" name="password1" class = "box" required /></td>
</tr>
<td colspan="2" align="center">
<input type = "submit" name = "update" value = "update"/><br />