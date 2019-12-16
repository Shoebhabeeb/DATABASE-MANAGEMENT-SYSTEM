<?php
   include('config.php');
   include('session3.php');
  
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['username'];
	$pass=$_POST['password'];
	$pass1=$_POST['password1'];
	$val =  $_SESSION['accountnumber'];
	
	$sql = "SELECT username FROM account WHERE username = '$username'";
    $result = mysqli_query($db,$sql); 
	$count=mysqli_num_rows($result);

	if($pass == $pass1){
	if (strlen($pass) < 6) {
        echo "<script>alert('password size less than 6');</script>";
    }
    else if (!preg_match("#[0-9]+#", $pass)) {
       echo "<script>alert('at least one number');</script>";
    }
    else if (!preg_match("#[a-zA-Z]+#", $pass))  
        echo "<script>alert('at least one letter');</script>";
	}
	
	 if($count>=1)
   {
	echo"<script>alert('username exits');</script>";}
	
	else
    {
			$sql1 = "UPDATE account SET username='$username', password='$pass' WHERE accnumber='$val';";
			if (mysqli_query($db,$sql1))
			 {
			echo "<script>alert('You will be logged out plz login again with new password');</script>";
				echo '<meta http-equiv="refresh" content="0;Logout.php?msg='.$msg.'" />';}
		else{
		 echo "<script>alert('TRY AGAIN');</script>";
		}
    }
}
?>
 
<h1>UPDATE YOUR USER NAME AND PASSWORD </h1>

<p>Please update the username and password without closing the window or opening it in the new tab sign out and login again for banking</p>
 
 <div align = "right"><h1>Welcome </h1> 
      <h2><a href = "Logout.php">Sign Out</a></h2></div>
	  
	<div id="outPopUp">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               <form action = " " method = "post">
                  <label>New UserName</label>
				  <input type = "text" name = "username" class = "box" required /><br /><br />
                  <label>Password</label>
				  <input type = "password" name = "password" class = "box" required /><br/><br />
                  <label>Re enter Password</label>
				  <input type = "password" name = "password1" class = "box" required /><br/><br />
				  <input type = "submit" value = " Submit "/><br />
               </form>					
            </div>
				
         </div>
      </div>
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
