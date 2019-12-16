<?php
   include('session.php');
   include('config.php');
   	 $acc = $_SESSION['accountnumber'];
	 	$sql1 ="SELECT * FROM cardrequests natural join cardspending where accountnumber = $acc";
		$query = $db->query($sql1);
				//echo "<tr><td>". $row['roll_no']."</td></tr>";
				
   ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <a href="Cardrequest.php">Card Request</a>
     <a href="cardstatus.php">Card Status</a>
  <a href="contact.php">Complaints</a>
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
	<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</br>
</br>
</br>
</br>
</br>
</br>

</style><div class = "main1">
<div align = "center" id="customers">
<table border='10'>
					<tr>
					<th>ID</th>					
					<th>Loan Type</th>
					<th>Amount</th>
					<th>Status</th>
					<th>balance</th>
					</tr>
				<?php
				while($row = $query->fetch_assoc()){?>
				<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['cardtype']; ?></td>
				<td><?php echo $row['amount']; ?></td>				
				<td><?php if( $row['response'] == 'null')
					echo  "Pending";else if($row['response'] == 's')
					echo  "success"?></td>
				<td><?php if ($row['balanceamount']<0){
				$id = $row['id'];
				$sql12 = " DELETE FROM cardspending WHERE Id = '$id' ";
				$result12 = mysqli_query($db,$sql12);
				$sql13 = " DELETE FROM cardrequests WHERE Id = '$id' ";
				$result13 = mysqli_query($db,$sql13);
				}
				else{
					echo $row['balanceamount'];
				}?></td>				
<?php
}
?>        
</div>
<body style="background-color:  	#F0F8FF">
