<?php
	session_start();
	if(!isset($_SESSION['isPremiumMember'])){
		die("Error");
	}
	else{
		if($_SESSION['isPremiumMember']===FALSE){
			header("Location: login.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<p>This page is for members only and you cannot access this unless you have an account with us!</p>
</body>
</html>