<?php
require 'adminsession.php'; 


if(isset($_SESSION['sessuserchairman']) && isset($_SESSION['sessionpwdchairman']) && isset($_SESSION['usertypechairman']))
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
	unset($_SESSION['sessuserchairman']);
	unset($_SESSION['sessionpwdchairman']);
	unset($_SESSION['usertypechairman']);
	
	
	// destroy session
	session_destroy();
	
	
	

	
}
else
{
	header('Location:../index.php');	
}
	header('Location:../index.php');


?>
