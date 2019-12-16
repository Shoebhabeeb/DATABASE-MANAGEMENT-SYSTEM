<?php
include('config.php');
include('session.php');
	$value=$_SESSION['accountnumber'];

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$amount = $_POST['amount'];
	//$password = $_POST['password'];

	$sql5 = "SELECT * FROM accountdetails WHERE accountnumber = '$value'";
	$result5 = mysqli_query($db,$sql5); 
	$row5=mysqli_fetch_array($result5);
	$sql9 = "SELECT * FROM `loanpending` where Id = '$id'";
	$result9 = mysqli_query($db,$sql9); 
	$row9=mysqli_fetch_array($result9);
	$count9=mysqli_num_rows($result9);

	$sql100 = "SELECT * FROM security WHERE accnumber = '$value'";
$result100 = mysqli_query($db,$sql100); 
//$row100=mysqli_fetch_array($result100);
if(true){
	if($count9 == 1){	
	$pending = $row9['balanceamount']-$amount;
	if($row9['balanceamount'] > 0){
	if($row5['balance'] > $amount){
		$total = $row5['balance']-$amount;
		$sql2 = "UPDATE accountdetails SET balance = '$total' WHERE accountnumber = '$value'";
		$result2 = mysqli_query($db,$sql2);
		if($result2){
			$sql1 = "UPDATE loanpending SET balanceamount = '$pending' WHERE Id = '$id'";
			$result1 = mysqli_query($db,$sql1);
			if($result1){
				$sql7 = "INSERT INTO `transactionhistory`(`Sender_accnum`, `Receiver_accnum`, `amount`) VALUES ('$value', 'null',$amount)";
				$result7 = mysqli_query($db,$sql7);
				if($result7){
						echo "<script>alert('successfull');</script>";	
					echo '<meta http-equiv="refresh" content="0;loanstatus.php?msg=" />';}}
			else{
				echo "result1";
			}
		}else{
			echo "$result2";
		}
		
		
	}else{
		echo "balace";
	}
	}
	else{
		
	$sql12 = " DELETE FROM loanpending WHERE Id = '$id' ";
		$result12 = mysqli_query($db,$sql12);
		if($result12){
		echo "<script>alert('Wrong Loan ID, Click ok to check your loan ids');</script>";
		echo '<meta http-equiv="refresh" content="0;loanstatus.php?msg='.$msg.'" />';
		}
	}
	
}else{
				echo "<script>alert('Wrong Loan ID, Click ok to check your loan ids');</script>";	 
				echo '<meta http-equiv="refresh" content="0;loanstatus.php?msg='.$msg.'" />';
				}
}
else 
	echo "<script>alert('Wrong Password');</script>";
}

?>