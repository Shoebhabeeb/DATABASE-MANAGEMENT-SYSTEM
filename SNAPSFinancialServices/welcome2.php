 <?php
   include('session2.php');
   include("config.php");
   
    if(isset($_POST['Submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$accountNum=$_POST['AccountNum'];
		$phonenumber=$_POST['phonenumber'];
		$address=$_POST['address'];
		$name=$_POST['Name'];
		$mail=$_POST['mail'];
		$ssn=$_POST['ssn'];

      	$sql = "insert into account(name,phone,address,accnumber,username,password,email,ssn) values  ('$name','$phonenumber','$address','$accountNum','$username','$password','$mail',$ssn); ";

		if ($db->query($sql) === TRUE)
			 {
				echo "<script>alert('Done');</script>";	 
			}
	else {
		 echo "<script>alert('ALL FEILDS REQUIRED');</script>";		 
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
input[type=email], select, textarea {
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
	width:500px;

}
 
</style>
</head>
<body>

<div class="sidenav" align = "bottom">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <a class="active" href="welcome2.php"><i class="fa fa-home"></i></a> 
  <a href="complaintresponse.php">Complaints Response</a>
  <a href="loanresponse.php">Loan Response</a>
  <a href="cardresponse.php">Card Response</a>
  <a href="alterloans.php">INSERT or Remove Loans</a>
  <a href="altercards.php">INSERT or Remove Cards</a>
  <h2><a href = "Logout2.php">Sign Out</a></h2></div>

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
 <body>
      <div align = "right"><h1>Welcome <?php echo $login_session1; ?></h1> 
   <div align = "center"><p>No special characters were taken in NAME field even space is considerd as a special character</p></div>

<form method="post" action="welcome2.php">
	<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Enter User Details For Linking</b></div>
				
            <div style = "margin:30px">
               <form action = "" method = "post">
                  <label>UserName -</label>
				  <input type = "text" name = "username" class = "box" required /><br /><br />
                  <label>Password -</label>
				  <input type = "password" name = "password" class = "box" required /><br /><br />
				  <label>Account Number-</label>
				  <input type = "text" name = "AccountNum" class = "box" required /><br/><br />
				  <label>Name-</label>
				  <input type = "text" name = "Name" pattern = "[A-Za-z]*" class = "box" required /><br/><br />
				  <label>Phone Number-</label>
				  <input type = "text" name = "phonenumber" maxlength="10" pattern="^[0-9]*" class = "box" required /><br/><br />
				  <label>Address-</label>
				  <input type = "text" name = "address" class = "box" required /><br/><br />
				   <label>EMAIL-</label>
				  <input type = "email" name = "mail" class = "box" required /><br/><br />
				  <label>SSN</label>
				  <input type = "text" name = "ssn" class = "box" maxlength="7" pattern="^[0-9]{6}|[0-9]{8}|[0-9]{7}$" required /><br/><br />
                  <input type = "submit" name = "Submit" value = " Submit "/><br />
               </form>					
            </div>
         </div>	
      </div>
</form>
<body style="background-color:	#F0F8FF">
</body>
 