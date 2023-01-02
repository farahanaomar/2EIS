<?php	
//Create Connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "2EIS";

if(!$con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
	
	die("Connection failed!");
	
}


?>