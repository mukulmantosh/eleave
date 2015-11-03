<?php
require '../connection.php'; 
require 'adminsession.php';

function secure($a)
{

	$secure= trim($a);
	$secure = htmlspecialchars($secure);
	$secure = strip_tags($secure);
	return $secure;
}



	$firstname= secure($_POST['firstname']);
	$lastname = secure($_POST['lastname']);
	$email= 	secure($_POST['email']);
	$phone= 	secure($_POST['phone']);
	$password= 	secure($_POST['password']);
	$usertype= 	secure($_POST['usertype']);
	$dept=		secure($_POST['dept']);

	$email_check = $userCollection->find(array("email" => $email))->count();

	if($email_check==1)
	{
		echo "<script>alert('Email Already Taken.....Sorry!!!');</script>";
		header('refresh:0;url=addemployee.php');
	}
	else
	{
		$document=array();
		$document['firstname'] = $firstname;
		$document['lastname'] = $lastname;
		$document['email'] = $email;
		$document['phone'] = $phone;
		$document['password'] = $password;
		$document['type'] = $usertype;
		$document['dept'] = $dept;

		$userCollection->insert($document);

		echo "<script>alert('Employee Added Successfully :)');</script>";
		header('refresh:0;url=addemployee.php');

	}
	


?>