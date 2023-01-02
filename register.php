<?php
session_start();

	include("connect.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$user_type = $_POST['user_type'];
		
		if(!empty($username) && !empty($password) && !empty($cpassword) && !is_numeric($username))
		{
			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO signup (user_id, username, email, password, cpassword, user_type) VALUES ('$user_id','$username', '$email', '$password', '$cpassword', '$user_type')";
			
			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter valid information!";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--reponsive layout-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<title>Registration</title>

	
<link href="backgroundStyle.css" rel="stylesheet" type="text/css">
<link href="signupStyle.css" rel="stylesheet" type="text/css">

</head>

<body>

<!--Background-->
<div id="container" class="gradient-background font bubble">
 <img src="bubble.png" alt="bubble" style="width:800px; height:550px; display:inline-block; float: left; padding: 4px; margin: 0 0 0 0; "  >
	
	
	<form method="post">
	<!--Insert Logo-->
	<div class="login-form font">
	  <img src="2EIS Logo.png" alt="logo" class="center"/>
	
	<ul class="signup">
	  <li><h2>SIGN UP</h2></li>	
		
		<li><input type="text" name="username" placeholder="Username" required></li>
		<li><input type="text" name="email" placeholder="Email" required></li>
		<li><input type="password" name="password" placeholder="Password" required></li>
		<li><input type="password" name="cpassword" placeholder="Confirm Password" required></li>
		<li><strong>User Type</strong> <select type="text" name="user_type" required>
			<option selected>Choose one</option>
			<option value="User">User</option></li>
			<option value="Admin">Admin</option></li></select>
		<li>Have account ? <a href="login.php">Login here</a></li>
		<li><input id= "button" type="submit" name="Register" value="Register"></li>	
		<li>Email us at 2eis.my for any inquiry</li>
		</ul>
		</div>
	</form>
	</div>
	

</body>
</html>