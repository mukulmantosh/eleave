<?php
require '../connection.php';
session_start(); // STARTING SESSION
session_regenerate_id(true); // REGENERATING SESSION ID TO PROTECT FROM SESSION HIJACKING ATTACK

if(isset($_SESSION['sessuser']) && isset($_SESSION['sessionpwd']) && isset($_SESSION['usertype']))
{

}
else
{
header('Location:../index.php?err');
die();
}

//SET NO CACHING PAGE WILL BE NOT CACHED

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$userCollection= $db->selectCollection('user');
?>