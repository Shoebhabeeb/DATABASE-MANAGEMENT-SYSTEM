<?php

include('config.php');
include('session.php');
$val=$_SESSION['accountnumber'];
$sql = "select * from security where accnum = '$val'";
$result1 = mysqli_query($db,$sql1);     
$count1=mysqli_num_rows($result1);  


?>