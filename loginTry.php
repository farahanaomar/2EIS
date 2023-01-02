<?php
session_start();

	include("connect.php");
	include("functions.php");

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
			
			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:Adminpage.php");
						die;
					}
				}
			}
			
			echo "Wrong username or password!";

		}else
		{
			echo "Wrong username or password!";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
	<style type="text/css">
	#text{
		height:25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		}
	
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
		}
		
	#box{
		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
		}
	
	
	</style>
	
<div id= "box">
	
	<form method="post">
		<div style="font-size: 20px; margin:10px; color:white;">Login</div>
		<input id= "text" type="text" name="username"><br><br>
		<input id= "text" type="password" name="password"><br><br>
		
		<input id= "button" type="submit" name="Login"><br><br>
		
		<a href="register.php">Register Here !</a><br><br>
	</form>
	
	</div>
	

</body>
</html>