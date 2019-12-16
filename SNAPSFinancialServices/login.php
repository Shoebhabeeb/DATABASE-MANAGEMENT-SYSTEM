
   <?php

$rand=substr(rand(),0,4); //only show 4 numbers

   include("config.php");
   session_start();
   if(!empty($_SESSION['login_user']))
		header("location: welcome.php");
   else if(!empty($_SESSION['login_user1']))
	   header("location: welcome2.php");
   else if(!empty($_SESSION['login_user3']))
	   header("location: thankyou.php");

   else if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM account WHERE username = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($result);
	  $count=mysqli_num_rows($result);  
	  
$sql1 = "SELECT adminuser FROM admin WHERE adminuser = '$myusername' and pass = '$mypassword'";
      $result1 = mysqli_query($db,$sql1);     
	  $count1=mysqli_num_rows($result1);     
	  $_SESSION['username'] = $myusername;
	  $_SESSION['accountnumber'] = $row['accnumber'];
		$num =  $row['accnumber'];
		
      $sql3 = "SELECT * FROM accountdetails WHERE accountnumber = '$num'";
	  $result3 = mysqli_query($db,$sql3);
	  $row3 = mysqli_fetch_array($result3);
	   $_SESSION['Balance'] = $row3['balance'];
	  
	  
	$sql2 = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
	  $result2 = mysqli_query($db,$sql2);
	  $row2 = mysqli_fetch_array($result2);
	  $count2=mysqli_num_rows($result2);     

	  $user = $row2['username'];
	  $user1 = $row['username'];
	  $checktitle = strcmp($user,$user1);
	  if($count2 !=0){
	  if($checktitle ==0){
		$_SESSION['login_user3'] = $myusername;
        header("location: thankyou.php");
	  }}
      else if($count == 1) {
         //session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        header("location: welcome.php");
      }
	   if($count1 == 1){ 
	  //session_register("myusername");
        $_SESSION['login_user1'] = $myusername;
        header("location: welcome2.php");
      }
	  else
	  {
		echo "<script>alert('Wrong UserName or Password');</script>";		 

	  }
	  
   }
?>
<html>

 <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no"> 
 <style>

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 250px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 0px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
.main1 {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
input[type=text], select, textarea {
    	    margin: auto;
	width: 100%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 2px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 10px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=password], select, textarea {
    	    margin: auto;
	width: 100%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 2px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 10px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}


/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color:white ;
    color: black;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: auto;

}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 1px;
    background-color: #f2f2f2;
    padding: 200px;
	height: 300px;
	width:500px;

}
 
</style>
   <head>
     <link rel='stylesheet' href="testme.css">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

      <title>SNAPS Financial Services</title>
	  <link rel="shortcut icon" href="icon.jpg" />
	   <div align = "center">
        <img src="icon.jpg" style="width: 50px;height: 50px;" >
		<h1> SNAPS Financial Services</h1>
    
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
		 .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 150;
    border-radius: 150;
}

      </style>
      
   </head>
     <div class="imgcontainer">
    <img src="images.png" alt="Avatar" class="avatar">
  </div>
   <body bgcolor = "#FFFFFF">
	<div id="outPopUp">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               <form action = "" method = "post">
                  <label>UserName</label>
				  <input type = "text" name = "username" class = "box" required /><br /><br />
                  <label>Password</label>
				  <input type = "password" name = "password" class = "box" required /><br/><br />
                  <input type = "submit" value = " Submit "/><br />


               </form>					
            </div>
				
         </div>
	   <h4 align = "Right"><a href = "us.html"" target="_blank">About us</a></h4></div>		 	  
      <h4 align = "Right"><a href = "newuser.php">Forgot Password ?</a></h4></div>
      </div>
	 <style>		
  </form>
  
	 <style>
<style>
.footer {
    left: 200;
    bottom: 200%;
    width: 100%;
    background-color: #111;
    color: white;
    text-align: center;
	    position: absolute;
}
</style>
<body style="background-color: 	#F0F8FF">


</div> 