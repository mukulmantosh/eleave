<?php
require 'adminsession.php'; 


if(isset($_SESSION['sessuserprincipal']) && isset($_SESSION['sessionpwdprincipal']) && isset($_SESSION['usertypeprincipal']))
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
	unset($_SESSION['sessuserprincipal']);
	unset($_SESSION['sessionpwdprincipal']);
	unset($_SESSION['usertypeprincipal']);
	
	
	// destroy session
	session_destroy();
	
	
	

	
}
else
{
	header('Location:../index.php');	
}
	header('Location:../index.php');


?>