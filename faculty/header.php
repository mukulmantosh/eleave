<?php require 'adminsession.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Welcome</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--base css styles-->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

<!--page specific css styles-->

<!--flaty css styles-->
<link rel="stylesheet" href="css/flaty.css">
<link rel="stylesheet" href="css/flaty-responsive.css">

</head>
<body>


<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
<span class="fa fa-bars"></span>
</button>
<a class="navbar-brand" href="#">
<small>
<i class="fa fa-desktop"></i>
Welcome Faculty
</small>
</a>

<!-- BEGIN Navbar Buttons -->
<ul class="nav flaty-nav pull-right">

<!-- BEGIN Button User -->
<li class="user-profile">
<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
<span class="hhh" id="user_info">
<?php echo $profres["firstname"].'&nbsp;'.$profres["lastname"]; ?>
</span>
<i class="fa fa-caret-down"></i>
</a>

<!-- BEGIN User Dropdown -->
<ul class="dropdown-menu dropdown-navbar" id="user_menu">



<li class="divider"></li>

<li>
<a href="logout.php">
<i class="fa fa-off"></i>
Logout
</a>
</li>
</ul>

<!-- BEGIN User Dropdown -->
</li>
<!-- END Button User -->
</ul>
<!-- END Navbar Buttons -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
<!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
<!-- BEGIN Navlist -->
<ul class="nav nav-list">

<li class="active">
<a href="index.php">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
</a>
</li>

<li>
<a href="applyleave.php" class="dropdown-toggle">
<i class="fa fa-edit"></i>
<span>Apply For Leave</span>
</a>
</li>


<li>
<a href="cancelleave.php" class="dropdown-toggle">
<i class="glyphicon glyphicon-remove"></i>
<span>Cancel Leaves</span>
</a>
</li>

<li>
<a href="viewcurrentleave.php" class="dropdown-toggle">
<i class="glyphicon glyphicon-check"></i>
<span>View Current Status</span>
</a>
</li>



<li>
<a href="leavehistory.php" class="dropdown-toggle">
<i class="glyphicon glyphicon-th-list"></i>
<span>History of Leaves</span>
</a>
</li>


<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
<i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar -->