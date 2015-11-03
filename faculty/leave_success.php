<?php

require 'adminsession.php';

function secure($a)
{

	$secure= trim($a);
	$secure = htmlspecialchars($secure);
	$secure = strip_tags($secure);
	return $secure;
}


	$applyleave = $db->selectCollection('applyleave');

	$leavetype= secure($_POST['leavetype']);
	$fromdate= secure($_POST['fromdate']);
	$todate= secure($_POST['todate']);
	$reason= secure($_POST['reason']);
	$registerdate= date("d/m/Y");
	$firstname= $profres["firstname"];
	$lastname= $profres["lastname"];
	$empid= $profres["_id"];
	$emptype= $profres["type"];
	$empdept= $profres["dept"];


	$document= array();
	$document['leavetype'] = $leavetype;
	$document['fromdate'] = $fromdate;
	$document['todate'] = $todate;
	$document['reason'] = $reason;
	$document['registerdate'] = $registerdate;
	$document['firstname'] = $firstname;
	$document['lastname'] = $lastname;
	$document['empid'] = $empid;
	$document['emptype'] = $emptype;
	$document['empdept'] = $empdept;
	$document['leavestatus'] = 'Forwarded to HOD';

	$applyleave->insert($document);

	echo "<script>alert('Your Application for leave has been applied....');</script>";
	header('refresh:0;url=applyleave.php');



?>