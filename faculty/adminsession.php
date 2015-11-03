<?php
require '../connection.php';
session_start();
session_regenerate_id();

if(isset($_SESSION['sessuserfaculty']) && isset($_SESSION['sessionpwdfaculty']) && isset($_SESSION['usertypefaculty']))
{

}
else
{
header('Location:../index.php?err');
die();
}


//Set no caching
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");



$firstnameprofile= $_SESSION['sessuserfaculty'];


$userCollection= $db->selectCollection('user');
$userCollection_find= $userCollection->find(array("email" => $firstnameprofile));

foreach ($userCollection_find as $profres) {}


$leaveCollection= $db->selectCollection('applyleave');


?>