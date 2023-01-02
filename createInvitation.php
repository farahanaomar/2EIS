<?php
//session_start();

	include("connect.php");
//	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fullname = $_POST['fullname'];
		$nickname = $_POST['nickname'];
		$phonenum = $_POST['phonenum'];
		$altnum = $_POST['altnum'];
		$eventname = $_POST['eventname'];
		$eventType = $_POST['eventType'];
		$eventadd = $_POST['eventadd'];
		$addLink = $_POST['addLink'];
		$eventday = $_POST['eventday'];
		$eventdate = $_POST['eventdate'];
		$start1 = $_POST['start1'];
		$end1 = $_POST['end1'];
		$start2 = $_POST['start2'];
		$end2 = $_POST['end2'];
		$consent = $_POST['consent'];
		

			//save to database
			$query = "INSERT INTO event (event_id, fullname, nickname, phonenum, altnum, eventname, eventType, eventadd, addLink, eventday, eventdate, start1, end1, start2, end2, consent) VALUES ('$event_id','$fullname', '$nickname', '$phonenum', '$altnum', '$eventname', '$eventType', '$eventadd', '$addLink', '$eventday', '$eventdate', '$start1', '$end1', '$start2', '$end2', '$consent')";
			
			mysqli_query($con, $query);
			header("Location: dashboardUser.php");
			die;
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="createInvitation.css" rel="stylesheet" type="text/css">
	 
<title>Create Invitation</title>
	
</head>

<body>
	
	<div id="container" class="container" >
		
<!--	<img src="bubble.png" alt="bubble" style="width:800px; height:550px; display:inline-block; float: left; padding: 4px; margin: 0 0 0 0; "  >-->
		<div class="title">CREATE EVENT INVITATION </div>
		<form method="POST" action="eventUser.php">
			<div class="host-details">
				<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" name="fullname" placeholder="Enter your name" required>		
				</div>
				<div class="input-box">
					<span class="details">Nickname</span>
					<input type="text" name="nickname" placeholder="Enter your nickname" required>		
				</div>
				<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="text" name="phonenum" placeholder="Enter Phone Number" required>		
				</div>
				<div class="input-box">
					<span class="details">Alternative Number</span>
					<input type="text" name="altnum" placeholder="Enter alternative number" required>		
				</div>
				
				<!--Event details input-->
				<div class="input-box">
					<span class="details">Event Name</span>
					<input type="text" name="eventname" placeholder="Enter Event Name" required>		
				</div>
				
				<div class="eventType">
					<span class="eventType-title">Event Type</span>
					<div class="category">
						<label for="private">
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
				<div class="input-box">
					<span class="details">Event Address</span>
					<input type="text" name="eventadd" placeholder="Enter Event Address" required>		
				</div>
				<div class="input-box">
					<span class="details">Event Location Link</span>
					<input type="text" name="addLink" placeholder="Enter Event Location Link" required>		
				</div>
				<div class="input-box">
					<span class="details">Event Day</span>
					<input type="text" name="eventday" placeholder="Enter Event Day" required>		
				</div> 
				
<!--
						<label for="details">Event Day</label>
						<div class="eventday" style="width:200px;" name="eventday" id="eventday">	
							<select>
							  <option value="monday">Monday</option>
							  <option value="tuesday">Tuesday</option>
							  <option value="wednesday">Wednesday</option>
							  <option value="thursday">Thursday</option>
							  <option value="friday">Friday</option>
							  <option value="saturday">Saturday</option>
							  <option value="sunday">Sunday</option>
							</select>
						</div>
-->
					
				
				
				
				<div class="input-box">
					<span class="details">Event Date</span>
					<input type="date" id="date" name="eventdate" required>	
				</div>

				<div class="input-box">
					<span class="details">SLOT 1: Start Time</span>
					<input type="time" id="start1" name="start1" required>
					<label for="end1"> End Time:</label>
					<input type="time" id="end1" name="end1" required>
				</div>
				<div class="input-box">
					<span class="details">SLOT 2: Start Time</span>
					<input type="time" id="start2" name="start2">
					<label for="end2"> End Time:</label>
					<input type="time" id="end2" name="end2">
				</div>
		</div>
				<div class="consent">
					<input type="radio" name="consent" id="consent" value="consent" required>
					I have read and understand the T&C of 2EIS
				</div>
			
				<div class="button">
					<input type="submit" value="Create Event!"><br>		
					<span class="email">Email us at 2eis.my for any inquiry</span>

			</div>
		
		
		
		</form>

	

	</div>	
</body>
</html>