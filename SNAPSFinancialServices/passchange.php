<h1>CHANGE PASSWORD</h1>
<?php
include("config.php");
	  if(isset($_POST['submit'])){
	  
        $query = "select * from test where name = '$login_session'";
		$result = mysql_query($query);
		while ($row    = mysql_fetch_array($result))
            {

                $Name     = $row['Name'];
                $Username = $row['User_name'];
                $Password = $row['User_password'];
            }
            ?>
	  }
?>

<label for="fname">Answer</label>
    <input type="text" id="fname" name="answer" placeholder="Your name..">