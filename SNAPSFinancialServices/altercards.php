<?php
 include('config.php');
   include('session2.php');

if (isset($_POST['update'])){
		$cardtype = $_POST['cardtype'];
	  $amount = $_POST['amount'];
		$sql = "INSERT INTO `card_types` (`cardname`, `Range_of_amount`) VALUES ('$cardtype', '$amount'); ; ";
		if ($db->query($sql) === TRUE)
			 {
				 echo "<script>alert('Updation Done');</script>";		 
    		 	 header("location:welcome2.php");
			}
	 else {
		 echo "<script>alert('not registered');</script>";		 
	}
}	

?>

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
    padding-top: 200px;
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
	width: 80%; /* Full width */
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
  <a href="cardresponse.php">Card Response</a>
  <a href="altercards.php">INSERT or Remove Cards</a>
  <h2><a href = "Logout2.php">Sign Out</a></h2></div>

</div>

 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <html>  
<div class = "main">
     <link rel='stylesheet' href="testme.css">
	 
      <title>SNAPS Financial Services</title>
	  <link rel="shortcut icon" href="icon.jpg" />
	   <div align = "center">
        <img src="icon.jpg" style="width: 50px;height: 50px;" >
		<h1> SNAPS Financial Services</h1>
    </div>
	</div>   
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
		
<table align="center" width="500px" cellpadding="5" cellspacing="5">

<tr>
<td>TYPE OF Card</td>
<td><input type="text" name="cardtype" required  /></td>
</tr>
<tr>
<td>Max Amount</td>
<td><input type="text" name="amount"pattern="^[{10}$" required  maxlength="10" /></td>
</tr>
</br>
<td colspan="2" align="center">
                  <input type = "submit" name = "update" value = "update"/><br />
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="background-color:	#F0F8FF">
</body>
</table>
<div align = "center"><?php
include('config.php');
	$sql1 ="SELECT * FROM card_types";
	$query = $db->query($sql1);
?>
<table border='5'>
					<tr>
					<th>Card Type</th>					
					<th>Max Amount</th>
					<th>Delete</th>
					</tr>
					<?php
				while($row = $query->fetch_assoc()){?>
				<tr>
				<td><?php echo $row['cardname']; ?></td>
				<td><?php echo $row['Range_of_amount']; ?></td>
				<td><a href="deletecard.php?did=<?php echo $row['cardname']?>">
          <div align = "center"><span class="glyphicon glyphicon-trash"></span></div>
        </a></td>
<?php
}
?></div>