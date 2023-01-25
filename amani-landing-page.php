<?php
session_start();
  
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

   if ($_SERVER['REQUEST_METHOD'] == "POST")
   {
   	$_SESSION['user_id'] = $user_data['user_id'];
        header("Location: topup.php");
        die;
   }

   

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Amani fun place</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="box">
		<form method="post">
		<a href="logout.php">Logout</a>
	<br>
	Hello, <?php echo $user_data['user_name'];  ?><br><br>
	<br>
	Current balance<br><br>
	<br>
	<input type="submit" name="top_up" value="Top up">	

		</form>
	
</div>
</body>
</html>
