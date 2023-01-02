<?php	
//Create Connection
$conn=mysqli_connect("localhost", "root", "","2EIS"); //Host, userName, email, password

// Check connection
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);}

?>