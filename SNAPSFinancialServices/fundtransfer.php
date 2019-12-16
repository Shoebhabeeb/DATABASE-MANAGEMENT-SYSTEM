<?php
include('config.php');
   include('session.php');
   $value=$_SESSION['accountnumber'];
$sql101 = "SELECT * FROM security WHERE accnumber = '$value'";
$result101 = mysqli_query($db,$sql101); 
//$row101=mysqli_fetch_array($result101);
/*if($row101['password'] == NULL){
	echo"<script>alert('SORRY you dont have a password we are redirecting so u can update');</script>";  
        header("location: redirect.php");	
   }*/
?>


<?php
   if(isset($_POST['update'])){
	$accnum=$_POST['accnum'];
	$amount = $_POST['amount'];
	//$password=$_POST['password'];
	
	$sql = "SELECT * FROM account WHERE accnumber = '$accnum'";
    $result = mysqli_query($db,$sql); 
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);
	
	
$sql100 = "SELECT * FROM security WHERE accnumber = '$value'";
$result100 = mysqli_query($db,$sql100); 
//$row100=mysqli_fetch_array($result100);
if(true){	
	if($accnum != $value){
	if($count == 1){
		// FOR RECIVER
		$sql5 = "SELECT * FROM accountdetails WHERE accountnumber = '$accnum'";
		$result5 = mysqli_query($db,$sql5); 
		$row5=mysqli_fetch_array($result5);
		$add = $amount+$row5['balance'];
		//FOR SENDER
		$sql1 = "SELECT * FROM accountdetails WHERE accountnumber = '$value'";
		$result1 = mysqli_query($db,$sql1); 
		$row1=mysqli_fetch_array($result1);
		if($amount <= $row1['balance']){
			$remaing = $row1['balance']-$amount;
			
			$sql2 = "UPDATE accountdetails SET balance = '$remaing' WHERE accountnumber = '$value'";
			$result2 = mysqli_query($db,$sql2); 
			$sql3 = "UPDATE accountdetails SET balance = '$add' WHERE accountnumber = '$accnum'";
			$result3 = mysqli_query($db,$sql3); 
			
			$sql7 = "INSERT INTO `transactionhistory`(`Sender_accnum`, `Receiver_accnum`, `amount`) VALUES ('$value', '$accnum',$amount)";
			$result7 = mysqli_query($db,$sql7);
				if($result7){
					echo"<script>alert('Transaction Successfull');</script>";
				}

			
		}
		 else{
			 echo"<script>alert('Insufficient Funds');</script>";
		 }
		 
	 }		
	else{
		echo"<script>alert('Invalid Account Number');</script>";
		}
   }

   }
   else{
	   echo"<script>alert('Invalid Password');</script>";
   }
   
   }

?>
 
<html>     
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="css/responsive.css" rel="stylesheet">

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
input[type=text], select, textarea {
    	    margin: auto;
	width: 100%; /* Full width */
    padding: 10px; /* Some padding */ 
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
    padding: 10px; /* Some padding */ 
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
    padding: 300px;
	height: 300px;
	width:500px;

}
 
</style>
</head>
<body>

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
	<div class="sidenav" align = "bottom">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a class="active" href="welcome.php"><i class="fa fa-home"></i></a> 
  <a href="fundtransfer.php">Fund Transfer</a>
  <a href="loanpayment.php">Loan Payments</a>
  <a href="Loanrequest.php">Loan Request</a>
   <a href="cardpayment.php">Card Payments</a>
  <a href="Cardrequest.php">Card Request</a>
  <a href="contact.php">Complaints</a>
    <a href="edit.php">Edit PersonalDetail</a>
	<a href = "transactions.php">Transaction History</a>
]  <h2><a href = "Logout.php">Sign Out</a></h2></div>

</div>
	<div class="head">
	<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
		<div align = "center">
         <div style = "width:500px; border: solid 1px #333333; " align = "center">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Fund Transfer</b></div>
<table align="center" width="500px" cellpadding="5" cellspacing="5">

<tr>
<td>Account number:</td>
<td><input type="text" name="accnum" required  class = "box" maxlength="15" /></td>
</tr>
<tr>
<td>Amount:</td>
<td><input type="text" name="amount" class = "box" required  maxlength="10"  /></td>
</tr>

<td>Name :</td>
<td><input type="text" name="name" required class = "box" /></td>
</tr>
<!-- <td>Security Password:</td>
<td><input type="password" name="password" required class = "box" /></td> -->
</tr>

<td colspan="2" align="center">
<input type = "submit" name = "update"  value = "Transfer"/><br />


	   
	  
<body style="background-color: 	#F0F8FF">
