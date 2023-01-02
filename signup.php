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
			$query = "insert into signup (user_id, username, email, password, cpassword, user_type) values ('$user_id','$username','$email', '$password', '$cpassword', '$user_type')";
			
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
<title>Sign Up</title>

<link href="backgroundStyle.css" rel="stylesheet" type="text/css">
<link href="signupStyle.css" rel="stylesheet" type="text/css">
	
<!--
Validate require username / email / password 
<script>
function validateForm() {
  var x = document.forms["form1"]["username"].value;
  var y = document.forms["form1"]["email"].value;
  var z = document.forms["form1"]["password"].value;
  if (x == "" || x == null || y == "" || y == null || z == "" || z == null) {
    alert("Please enter all field");
    return false;
  }
}
</script>	
-->
</head>

<body>
<!--Background-->
<div id="container" class="gradient-background font bubble">
 <img src="bubble.png" alt="bubble" style="width:800px; height:550px; display:inline-block; float: left; padding: 4px; margin: 0 0 0 0; "  >

	<form name="form1" method='post' onsubmit="return validateForm()" required>
	
	<div class="login-form font">
	  <img src="2EIS Logo.png" alt="logo" class="center"/>
	  <ul class="signup">
	  <li><h2>SIGN UP</h2> </li>
<!--	  <input id= "text" type="text" name="username" ><br><br>-->
	  <li><input name="text" name='username' placeholder='Username' maxlength="10"></li>
	  <li><input type="text" name="email" placeholder='Email' maxlenght=20></li>
	  <li><input type="password" name="password" placeholder="Password" maxlength="10"></li>
	  <li><input type="password" name="cpassword" placeholder="Confirm Password" maxlength="10"></li>  
	  <li>User Type    <select name="user_type">
		<option selected>User</option>
		<option>Admin</option></li>
	  <li>Have account ? <a href="login.php">Login here</a></li>
	  <li><input type="submit" value="SIGN UP" ></li>
	  <li>  E-mail us at 2eis.my for any inquiry </li>
	  </ul>
	</div>
	</form>
</div>	
	
	
</body>
</html>
