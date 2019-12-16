 <?php
   include('session.php');
   include('config.php');
   
    if(isset($_POST['submit']))
	{	$value= $_SESSION['username'];
      	 $ses_sql = mysqli_query($db,"select * from account where username = '$value'");
		 $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
		 $accountnumber = $row['accnumber'];
		 $complainttype = $_POST['complainttype'];
		 $complaint = $_POST['complaint'];
		 $sql = "insert into complaints (accountnumber,complaint,complainttype,response,Name,Designation) values  ('$accountnumber','$complaint','$complainttype','null','null','null'); ";
		if ($db->query($sql) === TRUE)
			 {
				  echo "<script>alert('Complaint Registered');</script>";}
		else
					echo "<script>alert('Complaint NOT Registered');</script>";
	}

?>
 
<html>     
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
   <a href="status.php">Complaint Status</a>
       <a href="edit.php">Edit PersonalDetail</a>
	<a href = "transactions.php">Transaction History</a>

    <h2><a href = "Logout.php">Sign Out</a></h2></div>

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

	<div class = "main1">
 <div class="container">
  <form action="contact.php" method = "POST">
        <label></label>
   <select name = "complainttype">
  <option value="--SELECT --">--SELECT --</option>
	<option value="ATM Related">ATM Related</option>
  <option value="Advances">Advances</option>
  <option value="Deposits">Deposits</option>
    <option value="General Banking">General Banking</option>
</select> 
<div id="get_state"></div> 


    <label>Complaint</label>
	<input type = "text" name = "complaint" class = "box" required /><br/><br />
    <input type="submit" value="Submit" name = "submit">
<body style="background-color: 	#F0F8FF">

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

   
</script>
