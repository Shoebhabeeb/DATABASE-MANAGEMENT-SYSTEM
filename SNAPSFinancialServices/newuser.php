
<?php
   
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username=$_POST['username'];
	  $accountnumber = $_POST['accountnumber'];
      $sql = "SELECT username FROM account WHERE username = '$username' and accnumber = '$accountnumber'";
      $result = mysqli_query($db,$sql);     
	  $count=mysqli_num_rows($result);

	  $sql1 = "SELECT * FROM admin WHERE adminuser = '$username'";
      $result1 = mysqli_query($db,$sql1);     
	  $count1=mysqli_num_rows($result1);
	  
      if($count == 1) {
		$row    = mysqli_fetch_assoc($result);
        $to = $row['email'];
        $Password = $row['password'];
		$subject = "Your Recovered Password";
		$message = "Please use this password to login " . $password;
		$headers = "From : saiprasadsomanchi@gmail.com";
if(mail($to, $subject, $message, $headers)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}
      }
	  else if($count1 == 1){
		$row    = mysqli_fetch_assoc($result1);
        $to = $row['email'];
        $Password = $row['password'];
		$subject = "Your Recovered Password";
		$message = "Please use this password to login " . $password;
		$headers = "From : saiprasadsomanchi@gmail.com";
if(mail($to, $subject, $message, $headers)){
		  			echo "<script>alert('PASSWORD has been sent to your mail');</script>";
}else{
		  			echo "<script>alert('Faild to recover password');</script>";
}
}
	  else{ 
		  			echo "<script>alert('Please Try Again Later');</script>";
					header("newuser.php");
      }
   }
?>

<html>     
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 200px;
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

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
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
	width:300px;

}
 
</style>
</head>
<body>

   <head>
   <div class = "main">
     <link rel='stylesheet' href="testme.css">
      <title>SNAPS Financial Services</title>
	  <link rel="shortcut icon" href="icon.jpg" />
	   <div align = "center">
        <img src="icon.jpg" style="width: 50px;height: 50px;" >
		<h1>SNAPS Financial Services</h1>
    </div>
	</div>
	
	<div  align = "center">
 <div class="container">
  <form action="newuser.php" method = "POST">
	<h5> FORGOT YOUR PASSWORD ??</h5>
	<label for="fname">Account Number</label>
    <input type="text" id="fname" name="accountnumber" required placeholder="Your name..">
	<label for="fname">Last User Name</label>
    <input type="text" id="fname" name="username" required placeholder="Your name..">
    <input type="submit" value="Submit">
<body style="background-color: #7FFF00">

  </form>
   

</div> 

</div>
<style>
.footer {
    left: 200;
    bottom: 100%;
    width: 100%;
    background-color: #111;
    color: white;
    text-align: center;
}
</style>

