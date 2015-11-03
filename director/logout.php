<?php
require 'adminsession.php'; 


if(isset($_SESSION['sessuserdirector']) && isset($_SESSION['sessionpwddirector']) && isset($_SESSION['usertypedirector']))
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
	unset($_SESSION['sessuserdirector']);
	unset($_SESSION['sessionpwddirector']);
	unset($_SESSION['usertypedirector']);
	
	
	// destroy session
	session_destroy();
	
	
	

	
}
else
{
	header('Location:../index.php');	
}
	header('Location:../index.php');


?>