
<?php
 include('config.php');
   include('session.php');
	$cardtype = $_GET['cardtype'];
	  $amount = $_GET['amount'];
	$value= $_SESSION['accountnumber'];
if (isset($_GET['submit'])){
	$sql3 = "SELECT * FROM `card_types` where cardname = '$cardtype'";
	  $result3 = $db->query($sql3);
	  $row3 = $result3->fetch_assoc();
	  if($row3['Range_of_amount'] > $amount){
		$sql = "INSERT INTO `cardrequests` (`accountnumber`, `cardtype`, `amount`, `response`) VALUES ('$value', '$cardtype', '$amount', 'null'); ";
		if ($db->query($sql) === TRUE)
			 {
				 echo "<script>alert('Updation Done');</script>";		 
    		 	 header("location:welcome.php");
			}
	 else {
		 echo "<script>alert('not registered');</script>";		 
	  }
	  }else{
		  echo "<script>alert('EXCEDED THE LIMIT');</script>";	
	  }
}	

?>