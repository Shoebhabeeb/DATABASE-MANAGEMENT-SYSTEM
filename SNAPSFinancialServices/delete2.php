<?php
  include('config.php');
   include('session2.php');
   $id=$_GET['sdid'];
   
$sql = " DELETE FROM loanrequests WHERE ID = '$id' ";
$result = mysqli_query($db,$sql);
if($result)
{

	$msg="DELETED from the data"; 
	echo '<meta http-equiv="refresh" content="0;loanresponse.php?msg='.$msg.'" />';}
?>