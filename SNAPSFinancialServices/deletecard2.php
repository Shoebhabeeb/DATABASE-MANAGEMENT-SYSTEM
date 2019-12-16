<?php
  include('config.php');
   include('session2.php');
   $id=$_GET['sdid'];
   
$sql = " DELETE FROM cardrequests WHERE ID = '$id' ";
$result = mysqli_query($db,$sql);
if($result)
{

	$msg="DELETED from the data"; 
	echo '<meta http-equiv="refresh" content="0;cardresponse.php?msg='.$msg.'" />';}
?>