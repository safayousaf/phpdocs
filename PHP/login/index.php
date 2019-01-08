<?php
session_start();
if(!isset($_SESSION['Login'])){
	header('Location: login.php');
}
?>

<!doctype html>	
<html>
	<head>
	<title>github workspace</title>
	</head>
	<body>
	<h1>first github workspace heading</h1>
	<a href="logout.php">Logout</a>
	</body>
</html>
