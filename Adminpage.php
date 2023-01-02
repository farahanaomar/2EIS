<?php
//session_start();

	include("connect.php");
	include("functions.php");

//	$user_data = check_login($con);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--reponsive layout-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Admin page</title>
<!--This is Admin/Event Organiser Dashboard-->
	
<link href="backgroundStyle.css" rel="stylesheet" type="text/css">
<link href="layout.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--Background Design-->
<div id="container" class="gradient-background font bubble">

<!--Layout-->

<section>
  <menu id="menu">
	<img src="2EIS White Logo.png" alt="logo" class="center"/>

	  <ul>
      <li><img src="iconHome.jpg" alt="Dashboard" class="img"><a href="Dashboard.php">Dashboard</a></li>
      <li><img src="iconEvent.png" alt="Event" class="img"><a href="Event.php">Event List</a></li>
      <li><img src="iconGuest.png" alt="Guest" class="img"><a href="Guest.php">Guest List</a></li>
      <li><img src="iconGuest.png" alt="Notification" class="img"><a href="Notification.php">Notification</a></li>
      <li><img src="iconGuest.png" alt="Guest" class="img"><a href="Report.php">Report</a></li>
      <li><img src="iconGuest.png" alt="Guest" class="img"><a href="Setting.php">Setting</a></li>
      <li><img src="iconGuest.png" alt="Guest" class="img"><a href="#">Support Centre</a></li>
    </ul>
  </menu>
  
  <article>
    <h1>Admin Page</h1>
    <p>to be added</p>
  </article>
</section>

<footer>
  <p>Copyright © 2022 2EIS.  All rights reserved.</p>
</footer>
	
</body>
</html>