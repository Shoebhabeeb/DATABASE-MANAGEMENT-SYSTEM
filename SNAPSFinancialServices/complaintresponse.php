<?php
  include('config.php');
   include('session2.php');
?>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
input[type=text], select, textarea {
    	    margin: auto;
	width: 500; /* Full width */
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

<div align = "center">
  <form method = "POST">
  <select name = "complainttype">
  <option value="--SELECT --">--SELECT --</option>
	<option value="ATM Related">ATM Related</option>
  <option value="Advances">Advances</option>
  <option value="Deposits">Deposits</option>
    <option value="General Banking">General Banking</option>
</select>
<input type = "submit" value = " Submit "/><br />
</form>
<table border='20'>
					<tr>
					<th>Complaint ID</th>					
					<th>Complaint Type</th>
					<th>Account Number</th>
					<th>Complaint</th>
					<th>Response</th></tr>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$comp = $_POST['complainttype'];
$sql ="SELECT * FROM complaints where complainttype = '$comp'";
		$result = mysqli_query($db, $sql);
				while($row = mysqli_fetch_assoc($result))
					if ($row['response'] == "null"){
{?>
<tr>
<td><?php echo $row['ID']; ?></td>
<td><?php echo $row['complainttype'];?></td>
<td><?php echo $row['accountnumber']; ?></td>
<td><?php echo $row['complaint']; ?></td>
<td><a href="response.php?did=<?php echo $row['ID']?>">Add response </a></td>
</tr>
<?php
}}}
?>
</table>
<body style="background-color: 	#F0F8FF">
