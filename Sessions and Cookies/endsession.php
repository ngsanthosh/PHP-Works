<?php

	session_start();

	$params = session_get_cookie_params();

	setcookie(session_name(),'',time()-42000,$params['path'],$params['domain'],$params['secure'],$params['httponly']);

	$_SESSION = array();
	session_destroy();
	header("Location: login.php");