<?php
include('config.php');
   include('session.php');
   $id=$_GET['did'];
$sql = " DELETE FROM loanrequests WHERE id = '$id' ";
$result = mysqli_query($db,$sql);
if($result)
{
	$msg="DELETED from the data"; 
	echo '<meta http-equiv="refresh" content="0;loanstatus.php?msg='.$msg.'" />';}

?>