<?php
//session_start();

	include("connect.php");
//	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password) &&  !is_numeric($username))
		{
			//read from database
			$query = "SELECT * FROM signup  WHERE username = '$username' limit 1";
			
			$result = mysqli_query($con, $query);
			$stmt = $con->prepare($query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['user_type'] == 'admin')
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:dashboardAdmin.php");				
					}elseif($user_data['user_type'] == 'user'){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:dashboardUser.php");
					}else{
						$message[] = 'No user found!';
					}			
					
				}
			}
			
			echo "Wrong username or password!";

		}else
		{
//			echo "Wrong username or password!";
		}
	}
?>	

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--reponsive layout-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Login</title>

<link href="backgroundStyle.css" rel="stylesheet" type="text/css">
<link href="signupStyle.css" rel="stylesheet" type="text/css">

<!--
Validate require username / email / password 
<script>
function validateForm() {
  var x = document.forms["form1"]["userName"].value;
  var y = document.forms["form1"]["password"].value;
  if (x == "" || x == null || y == "" || y == null) {
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
 
<form method="post" name="form1" onsubmit="return validateForm()" required>
	
	<div class="login-form font">
	  <img src="2EIS Logo.png" alt="logo" class="center"/>
	  <ul class="signup">
	  <li><h2>Login</h2> </li>
	  <li><input id="text" type="text" name="username" placeholder='Username' required> </li>
	  <li><input id="text" type="password" name="password" placeholder='Password' required></li>
	  <li>Didnt have account ? <a href="register.php">Register here!</a></li>
	  <li><input id="button" type="submit" value="LOGIN" ></li>
	  <li>  E-mail us at 2eis.my for any inquiry </li>
	  </ul>
	</div>

</div>	
</form>
	

</body>
</html>
