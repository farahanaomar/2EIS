<?php
session_start();

	include("connect.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
</head>

<body>
	
	
	<a href="logout.php"> Logout</a>
	<h1>This is homepage</h1>
	
	<br> 
	Hello, <?php echo $user_data['username']; ?>
</body>
</html>