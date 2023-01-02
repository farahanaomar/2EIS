<?php
session_start();

if (isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
}

header("Location: loginTry.php");
die;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>