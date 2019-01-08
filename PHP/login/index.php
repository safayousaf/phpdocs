<?php
session_start();
if(!isset($_SESSION['Login'])){
	header('Location: login.php');
}
?>

<!doctype html>	
<html>
	<head>
	<title>GITHUB WORKSPACE</title>
	</head>
	<body>
	<h1>First GITHUB Workspace Heading</h1>
	<a href="logout.php">Logout</a>
	</body>
</html>
