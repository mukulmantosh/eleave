
<?php 
require 'connection.php'; 


session_start();  
session_regenerate_id(true);
if (isset($_POST['email'])) 
{
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);

	$userCollection = $db->selectCollection('user');
	$userCollection_find= $userCollection->find(array("email" => $email, "password" => $password));
	$res= $userCollection_find->count();
	foreach($userCollection_find as $user)
	{
		$type= $user["type"];

	}

	$type= $user["type"];
	// IF USERNAME AND PASSWORD MATCHES THEN THE IF STATEMENT GETS EXECUTED//
	if($res==1)
	
	{
		// SECOND NESTED-IF ELSE IS USED TO CHECK WHETHER DESIGNATION E.G. chairman,hod,faculty etc. MATCHES....//
		if($type=='chairman')
		{
			// IF STATEMENT IS TRUE THEN SET EMAIL AND PASSWORD IN SESSION VARIABLES AND REDIRECT TO THE CHAIRMAN PAGE//
			$_SESSION['sessuserchairman'] = $email;
			$_SESSION['sessionpwdchairman']= $password;
			$_SESSION['usertypechairman']= $type;
			header("Refresh: 0; url=chairman/index.php");
			die();
			
		}
		elseif($type=='admin')
		{
			// IF THIS STATEMENT IS TRUE THEN SET EMAIL AND PASSWORD IN SESSION VARIABLES AND REDIRECT TO THE ADMIN PAGE//
			$_SESSION['sessuser'] = $email;
			$_SESSION['sessionpwd']= $password;
			$_SESSION['usertype']= $type;
			header("Refresh: 0; url=admin/index.php");
			die();
		}
		elseif($type=='hod')
		{
			// IF THIS STATEMENT IS TRUE THEN SET EMAIL AND PASSWORD IN SESSION VARIABLES AND REDIRECT TO THE HOD PAGE//
			$_SESSION['sessuserhod'] = $email;
			$_SESSION['sessionpwdhod']= $password;
			$_SESSION['usertypehod']= $type;
			header("Refresh: 0; url=hod/index.php");
			die();
		}
		elseif($type=='faculty')
		{
			// IF THIS STATEMENT IS TRUE THEN SET EMAIL AND PASSWORD IN SESSION VARIABLES AND REDIRECT TO THE FACULTY PAGE//
			$_SESSION['sessuserfaculty'] = $email;
			$_SESSION['sessionpwdfaculty']= $password;
			$_SESSION['usertypefaculty']= $type;
			header("Refresh: 0; url=faculty/index.php");
			die();
		}
		elseif($type=='principal')
		{
			// IF THIS STATEMENT IS TRUE THEN SET EMAIL AND PASSWORD IN SESSION VARIABLES AND REDIRECT TO THE PRINCIPAL PAGE//
			$_SESSION['sessuserprincipal'] = $email;
			$_SESSION['sessionpwdprincipal']= $password;
			$_SESSION['usertypeprincipal']= $type;
			header("Refresh: 0; url=principal/index.php");
			die();
		}
		elseif($type=='director')
		{
			// IF THIS STATEMENT IS TRUE THEN SET EMAIL AND PASSWORD IN SESSION VARIABLES AND REDIRECT TO THE DIRECTOR PAGE//
			$_SESSION['sessuserdirector'] = $email;
			$_SESSION['sessionpwddirector']= $password;
			$_SESSION['usertypedirector']= $type;
			header("Refresh: 0; url=director/index.php");
			die();
		}
		else
		{
			
		 	// IF STATEMENT CONDITION FAILS THEN REDIRECT TO INDEX PAGE//
			header("Refresh:0; url=index.php");
			die();
		}
		
	}
	
	else
	{
		// IF STATEMENT CONDITION FAILS THEN REDIRECT TO INDEX PAGE//
		 header("Refresh:0; url=index.php");
		die();
	}
}

	// IF SESSION VARIABLES I.E. SESSION IS ALIVE IN BROWSER THEN REDIRECT PAGE ONLY IF THE SESSION IS SET OR ALIVE//
	if(isset($_SESSION['sessuser']) && isset($_SESSION['sessionpwd']) && isset($_SESSION['usertype']))
	{
		header('refresh:0;url=admin/index.php');
		die();
	}
	
	elseif(isset($_SESSION['sessuserchairman']) && isset($_SESSION['sessionpwdchairman']) && isset($_SESSION['usertypechairman']))
	{
		header('refresh:0;url=chairman/index.php');
		die();
	}
	
	elseif(isset($_SESSION['sessuserhod']) && isset($_SESSION['sessionpwdhod']) && isset($_SESSION['usertypehod']))
	{
		header('refresh:0;url=hod/index.php');
		die();
	}
	
	elseif(isset($_SESSION['sessuserfaculty']) && isset($_SESSION['sessionpwdfaculty']) && isset($_SESSION['usertypefaculty']))
	{
		header('refresh:0;url=faculty/index.php');
		die();
	}
	
	elseif(isset($_SESSION['sessuserprincipal']) && isset($_SESSION['sessionpwdprincipal']) && isset($_SESSION['usertypeprincipal']))
	{
		header('refresh:0;url=principal/index.php');
		die();
	}
	
	elseif(isset($_SESSION['sessuserdirector']) && isset($_SESSION['sessionpwddirector']) && isset($_SESSION['usertypedirector']))
	{
		header('refresh:0;url=director/index.php');
		die();
	}
	
	
	
	


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>E-LEAVE MANAGEMENT SYSTEM</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/fontgoogle.css" rel="stylesheet">
<link href="textillate-master/assets/animate.css" rel="stylesheet">
<link href="textillate-master/assets/style1.css" rel="stylesheet">
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/disable.js"></script>
<script src="js/bootstrap.js"></script>
<script src="textillate-master/jquery.textillate.js"></script>
<script src="textillate-master/assets/jquery.fittext.js"></script>
<script src="textillate-master/assets/jquery.lettering.js"></script>
</head>
<body>
<style>
body
{
	
	
	background:url(img/backgroundimage.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
}
</style>
<br>

<center><strong><p class="tlt" style="font-family: 'Gloria Hallelujah', cursive; font-size:45px; color:#099;">E-LEAVE MANAGEMENT SYSTEM</p></strong></center>


<script type="text/javascript">
$(function () {
    $('.tlt').textillate();
})
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
         <div class="account-wall">
                <form class="form-signin" action="" method="post">
                <input type="text" class="form-control" placeholder="Email" name="email"required autofocus autocomplete="off">
                <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="off">
            
                <br>

                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                
                </form>
            </div>
          
           
        </div>
    </div>
</div>

<strong><center><p class="tlt1"  data-in-effect="rollIn"  style="font-family: 'Gloria Hallelujah', cursive; font-size:30px; color:#000;">Developed by</p></center></strong>
<strong><center><p class="tlt4"   data-in-effect="bounce" style="font-family: 'Gloria Hallelujah', cursive; font-size:25px; color:#06F;">Mukul Mantosh</p></center></strong>


<script type="text/javascript">
$(function () {
    $('.tlt1').textillate();
})

$(function () {
    $('.tlt2').textillate();
})

$(function () {
    $('.tlt3').textillate();
})

$(function () {
    $('.tlt4').textillate();
})

$(function () {
    $('.tlt5').textillate();
})
</script>



</body>
</html>