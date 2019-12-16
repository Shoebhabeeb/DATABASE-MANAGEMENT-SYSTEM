

<?php
 include('config.php');
   include('session2.php');
    $id=$_GET['aid'];
	
$sql = " UPDATE loanrequests SET response = 's' WHERE id = '$id'";
$result = mysqli_query($db,$sql);

$sql3 = "select * from loanrequests where id = '$id'";
$result3 =  mysqli_query($db,$sql3);
$row = mysqli_fetch_array($result3);

$accountnumber = $row['accountnumber'];
$amount = $row['amount'];
if($result)
{	
$sql4 = "select * from accountdetails where accountnumber = '$accountnumber'";
$result4 =  mysqli_query($db,$sql4);
$row4 = mysqli_fetch_array($result4);
$balance = $row4['balance'];
$total = $balance + $amount;

$sql10 = " UPDATE accountdetails SET balance = '$total' where accountnumber = '$accountnumber'";
$result10 = mysqli_query($db,$sql10);
if($result10){
	$sql5 = "INSERT INTO `loanpending` (`accountnumber`, `balanceamount`, `Id`) VALUES ('$accountnumber', '$amount', '$id'); ";
	$result5 = mysqli_query($db,$sql5);
	if($result5){	
	       echo "<script>alert('APPROVED');</script>";
	$msg="LOAN APPROVED"; 
	echo '<meta http-equiv="refresh" content="0;loanresponse.php?msg='.$msg.'" />';
}}
}
else{
	$msg = "Failed to update";
	echo '<meta http-equiv="refresh" content="0;loanresponse.php?msg='.$msg.'" />';}
?>