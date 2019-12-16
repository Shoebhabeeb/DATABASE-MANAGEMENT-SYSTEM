<?php
include('config.php'); // Database Config
include('session.php');

if(isset($_POST['update'])){
	$value= $_SESSION['accountnumber'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password1 =$_POST['password1'];
	$val = $_SESSION['username'];
	
	$sql = "SELECT username FROM account WHERE username = '$username'";
    $result = mysqli_query($db,$sql); 
	$count=mysqli_num_rows($result);

	if($password == $password1){
	if (strlen($password) < 6) {
        echo "<script>alert('password size less than 6');</script>";
    }
    else if (!preg_match("#[0-9]+#", $password)) {
       echo "<script>alert('at least one number');</script>";
    }
    else if (!preg_match("#[a-zA-Z]+#", $password))  
        echo "<script>alert('at least one letter');</script>";
	}
	
	 if($count>=1){
		 if($username = $val){
			 echo"<script>alert('Same User Name Update it');</script>";
		}else{
				echo"<script>alert('username exits');</script>";}
	 }
	
	else
    {
			$sql1 = "UPDATE account SET username='$username', password='$password' WHERE accnumber='$value';";
			if (mysqli_query($db,$sql1))
			 {
				header("location:welcome.php");
				}
		else{
		 echo "<script>alert('TRY AGAIN');</script>";
		}
    }
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
    font-family: "Lato", sans-serif;
}
.main1 {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
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
    padding-top: 200px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
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
    padding: 300px;
	height: 300px;
	width:500px;

}
 
</style>
</head>
<body>

<div class="sidenav" align = "bottom">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a class="active" href="welcome.php"><i class="fa fa-home"></i></a> 
  <a href="fundtransfer.php">Fund Transfer</a>
  <a href="Loanrequest.php">Loan Request</a>
  <a href="contact.php">Complaints</a>
      <a href="edit.php">Edit PersonalDetail</a>
	      <a href="editusername.php">Edit Username and Password</a>	
	<a href = "transactions.php">Transaction History</a>


]  <h2><a href = "Logout.php">Sign Out</a></h2></div>

</div>
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

<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<form method="post" action="edit.php">
	<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Edit Details</b></div>
				
            <div style = "margin:30px">
               <form action = "" method = "post">
<table align="center" width="500px" cellpadding="5" cellspacing="5">


<td>USER NAME:</td>
<td><input type="text" name="username" class = "box"  required value="" /></td>
</tr>

<td>PASSWORD:</td>
<td><input type="password" name="password" class = "box"  required value="" /></td>
</tr>

<td>RE ENTER PASSWORD:</td>
<td><input type="password" name="password1" class = "box"  required value =""/></td>
</tr>
<td colspan="2" align="center">

<input type="submit" name="update" value="update" /></td>
</table>
               </form>					
            </div>
         </div>	
      </div>
<body style="background-color:	#F0F8FF">
</body>
