<?php
require 'adminsession.php'; 


if(isset($_SESSION['sessuserhod']) && isset($_SESSION['sessionpwdhod']) && isset($_SESSION['usertypehod']))
{
	// unset all $_SESSION data
	$_SESSION = array();
	// expire the session cookie
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(	session_name(), '',
		time() - 3600,
		$params["path"],
		$params["domain"],
		$params["secure"],
		$params["httponly"]
		);
	}
	unset($_SESSION['sessuserhod']);
	unset($_SESSION['sessionpwdhod']);
	unset($_SESSION['usertypehod']);
	
	
	// destroy session
	session_destroy();
	
	
	

	
}
else
{
	header('Location:../index.php');	
}
	header('Location:../index.php');


?>