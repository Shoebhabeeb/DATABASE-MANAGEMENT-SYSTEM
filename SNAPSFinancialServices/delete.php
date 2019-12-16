<?php
  include('config.php');
   include('session.php');
  $id=$_GET['did'];
   
$sql = " DELETE FROM complaints WHERE ID = '$id' ";
$result = mysqli_query($db,$sql);
if($result)
{
	$msg="DELETED from the data"; 
	echo '<meta http-equiv="refresh" content="0;status.php?msg='.$msg.'" />';}
	?>
	
	