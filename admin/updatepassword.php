<?php require 'adminsession.php'; ?>

<?php

if(isset($_POST['submit'])=="")
{
	header('Location:changepassword.php');
	die();
}


if($_SERVER['REQUEST_METHOD']=='POST')
{
	$id= strip_tags($_POST['id']);
	$changepassword = strip_tags($_POST['changepassword']);
	
 	$userCollection->update(array("_id" => new MongoId($id)), array('$set' => array("password" => $changepassword)));
	
	header('Location:changepassword.php');
}
else
{
// DO NOTHING
}
?>