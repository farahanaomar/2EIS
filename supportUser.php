<?php
//session_start();

	include("connect.php");
//	include("functions.php");

//	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$reportName = $_POST['reportName'];
		$reportEmail = $_POST['reportEmail'];
		$reportSubject = $_POST['reportSubject'];
		$reportMessage = $_POST['reportMessage'];

			//save to database
			$query = "INSERT INTO supportuser (reportName, reportEmail, reportSubject, reportMessage) VALUES ('$reportName','$reportEmail', '$reportSubject', '$reportMessage')";
			
			mysqli_query($con, $query);
			header("Location: supportUser.php");
			die;
	}
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS-->
	<link href="sidebarUser.css" rel="stylesheet" type="text/css">
	<link href="supportUser.css" rel="stylesheet" type="text/css">
	<!--Icons-->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<title>Support Center</title>
</head>

<body>
	<!--SIDEBAR-->
	<nav class="sidebar close">
		<header>
			<div class="image-text">
				<span class="image">
					<a href="Homepage.html">
					<img src="2EIS White.png" alt="logo">
					</a>
				</span>
			
			</div>
			
			<i class='bx bx-chevron-right toggle'></i>
			
		</header>
	
		<div class="menu-bar">
			<div class="menu">
				<li class="search-box">
							<i class='bx bx-search icon' ></i>
							<input type="text" placeholder="Search...">
				</li>
				<ul class="menu-links">
					<li class="nav-link">
						<a href="dashboardUser.php">
							<i class='bx bx-home-alt icon' ></i>
							<span class="text nav-text"> Dashboard </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="eventUser.php">
							<i class='bx bx-calendar icon' ></i>
							<span class="text nav-text"> Event List </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="notificationUser.php">
							<i class='bx bx-bell icon' ></i>
							<span class="text nav-text"> Notification </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="reportUser.php">
							<i class='bx bxs-report icon' ></i>
							<span class="text nav-text"> Report </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="profileUser.php">
							<i class='bx bxs-user icon' ></i>
							<span class="text nav-text"> Profile </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="supportUser.php">
							<i class='bx bx-support icon' ></i>
							<span class="text nav-text"> Support Centre </span>
						</a>
					</li>
				</ul>			
			</div>
			
			<div class="bottom-content">
				<li class="">
						<a href="">
							<i class='bx bx-log-out icon' ></i>
							<span class="text nav-text"> Logout </span>
						</a>
					</li>
			</div>		
		</div>	
	</nav>
	<script src="sidebar.js"></script>
<!--	End SIDEBAR -->
	
	
		<section class="home">
		<div class="text">Support Centre</div>
<!--			Start Support Centre-->
			<div class="container">
				<div class="content">
					<div class="left-side">
						<div class="address details">
							<i class='bx bxs-map'></i>
							<div class="topic">Address</div>
							<div class="text-one">Block BA, Jalan Seruling 12/2</div>
							<div class="text-two">Shah Alam, 42500 Selangor</div>
						</div>
						
						<div class="phone details">
							<i class='bx bxs-phone'></i>
							<div class="topic">Phone</div>
							<div class="text-one">+60193921482</div>
							<div class="text-two">+60351671871</div>
						</div>
						
						<div class="email details">
							<i class='bx bxs-envelope' ></i>
							<div class="topic">Email</div>
							<div class="text-one">support@2eis.my</div>
						</div>
					</div>
					
					<!--Input Part-->
					<div class="right-side">
						<div class="topic-text"> Send us a Message / Enquiry</div>
						<p>If you have any enquiry, suggestion, or issue, Please send us a message</p>
					
					
					<form method="POST" action="dashboardUser.php" id="reportForm">
						<div class="input-box">
							<input type="text" name="reportName" placeholder="Enter your name" required> 
						</div>
						<div class="input-box">
							<input type="text" name="reportEmail" placeholder="Enter your email" required>
						</div>
						<div class="input-box" name="reportSubject">
							<label for="reportSubject">Subject:</label>
							<select name="reportSubject" id="reportSubject" form="reportForm">
							  <option value="enquiry">Enquiry</option>
							  <option value="suggestion">Suggestion</option>
							  <option value="issue">Issue</option>
							</select>
						</div>
<!--
					<div class="reportSubject">
						<span class="reportSubject-title">reportSubject</span>
						<div class="category">
							<label for="enquiry">
								<input type="radio" name="eventType" id="private" value="private" >
								<span class="dot one"></span>
								<span class="eventType">Private  </span>
							</label>
							<label for="public">
								<input type="radio" name="eventType" id="public" value="public">
								<span class="dot two"></span>
								<span class="eventType">Public   </span>
							</label>
							<label for="corporate">
								<input type="radio" name="eventType" id="corporate" value="corporate">
								<span class="dot three"</span>
								<span class="eventType">Corporate</span>
							</label>
						</div>
					</div>
-->
						
						<div class="input-box message-box" >
							<textarea name="reportMessage" placeholder="Enter your message"></textarea>
						</div>
						<div class="button">
							<input type="submit" value="Send message">
						</div>
					
					</form>
					</div>
				
				</div>
			</div>
	
	</section>
</body>
</html>