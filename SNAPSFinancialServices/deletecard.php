<?php
include('config.php');
   include('session2.php');
   $id=$_GET['did'];
$sql = " DELETE FROM card_types WHERE cardname = '$id' ";
$result = mysqli_query($db,$sql);
if($result)
{
	$msg="DELETED from the data"; 
	echo '<meta http-equiv="refresh" content="0;altercards.php?msg='.$msg.'" />';}

?>