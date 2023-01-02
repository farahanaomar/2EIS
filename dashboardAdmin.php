<?php
//session_start();

	include("connect.php");
//	include("functions.php");

//	$user_data = check_login($con);
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CSS-->
	<link href="sidebarUser.css" rel="stylesheet" type="text/css">
	<!--Icons-->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	
	
	<title>Dashboard Admin</title>
</head>

<body>
	
<!--SIDEBAR-->
	<nav class="sidebar close">
		<header>
			<div class="image-text">
				<span class="image">
					<a href="Homepage.php">
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
						<a href="dashboardAdmin.php">
							<i class='bx bx-home-alt icon' ></i>
							<span class="text nav-text"> Dashboard </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="eventAdmin.php">
							<i class='bx bx-calendar icon' ></i>
							<span class="text nav-text"> Event List </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="notificationAdmin.php">
							<i class='bx bx-bell icon' ></i>
							<span class="text nav-text"> Notification </span>
						</a>
					</li>
					
					<li class="nav-link">
						<a href="reportAdmin.php">
							<i class='bx bxs-report icon' ></i>
							<span class="text nav-text"> Report </span>
						</a>
					</li>
					
					
					<li class="nav-link">
						<a href="supportAdmin.php">
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
		<div class="text">Admin Dashboard</div>
	</section>
	
	
	
	
	
	
</body>
</html>