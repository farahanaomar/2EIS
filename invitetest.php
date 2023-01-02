<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="invitetest.css" rel="stylesheet" type="text/css">
	
<title>Test Create</title>
	
</head>

<body>
	
	<div id="container" class="container " >
		
<!--	<img src="bubble.png" alt="bubble" style="width:800px; height:550px; display:inline-block; float: left; padding: 4px; margin: 0 0 0 0; "  >-->
		<div class="title">CREATE EVENT INVITATION </div>
		<form action="#">
			<div class="host-details">
				<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" placeholder="Enter your name" required>		
				</div>
				<div class="input-box">
					<span class="details">Nickname</span>
					<input type="text" placeholder="Enter your nickname" required>		
				</div>
				<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="text" placeholder="Enter Phone Number" required>		
				</div>
				<div class="input-box">
					<span class="details">Alternative Number</span>
					<input type="text" placeholder="Enter alternative number" required>		
				</div>
				
				<!--Event details input-->
				<div class="input-box">
					<span class="details">Event Name</span>
					<input type="text" placeholder="Enter Event Name" required>		
				</div>
				<div class="eventType">
		
					<span class="eventType-title">Event Type</span>
					<div class="category">
						<label for="private">
							<input type="radio" name="eventType" id="private">
							<span class="dot one"></span>
							<span class="eventType">Private  </span>
						</label>
						<label for="public">
							<input type="radio" name="eventType" id="public">
							<span class="dot two"></span>
							<span class="eventType">Public   </span>
						</label>
						<label for="corporate">
							<input type="radio" name="eventType" id="corporate">
							<span class="dot three"</span>
							<span class="eventType">Corporate</span>
						</label>
					</div>
				</div>
				<div class="input-box">
					<span class="details">Event Address</span>
					<input type="text" placeholder="Enter Event Address" required>		
				</div>
				<div class="input-box">
					<span class="details">Event Location Link</span>
					<input type="text" placeholder="Enter Event Location Link" required>		
				</div>
				<div class="input-box">
					<span class="details">Event Day</span>
					<input type="text" placeholder="Enter Event Day" required>		
				</div> 
				<div class="input-box">
					<span class="details">Event Date</span>
					<input type="date" id="date" name="date" required>	
				</div>

				<div class="input-box">
					<span class="details">SLOT 1: Start Time</span>
					<input type="time" id="start1" name="start1">
					<label for="end1"> End Time:</label>
					<input type="time" id="end1" name="end1">
				</div>
				<div class="input-box">
					<span class="details">SLOT 2: Start Time</span>
					<input type="time" id="start2" name="start2">
					<label for="end2"> End Time:</label>
					<input type="time" id="end2" name="end2">
				</div>
								</div>
				<div class="consent">
					<input type="radio" name="consent" id="consent">
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