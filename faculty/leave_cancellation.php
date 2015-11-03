<?php require 'adminsession.php'; ?>

<?php


	$id= strip_tags($_POST['id']);


 	$leaveCollection->update(array("_id" => new MongoId($id)), array('$set' =>
 	 array("leavestatus" => "Cancelled by Faculty")));
	
	header('Location:cancelleave.php');


?>