<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>FACULTY PENDING LEAVES</h1>
</div>
</div>
<style type="text/css">
<!--
input.largerCheckbox
{
	width: 20px;
	height: 20px;
}
//-->
</style>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['forwardleave']))
	{
		$checkbox= $_POST['checkbox'];
		$count= count($checkbox);
	
		for($i=0;$i<$count;$i++)
		{
			$leaveCollection->update(array("_id" => new MongoId($checkbox[$i])), array('$set' => array("leavestatus" => 'Leave Approved by Director')));
		}
	}
	elseif(isset($_POST['rejectleave']))
	{
		$checkbox= $_POST['checkbox'];
		$count= count($checkbox);
	
		for($i=0;$i<$count;$i++)
		{
			$leaveCollection->update(array("_id" => new MongoId($checkbox[$i])), array('$set' => array("leavestatus" => 'Leave Rejected by Director')));
		}
	}
	else
	{
		header('Location:facultyleavehistory.php');
		die();
	}


header('Location:facultyleavehistory.php');
die();
}
else
{
// DO NOTHING
}
?>

<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i>Faculty Pending Leaves</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="table-responsive">
<table class="table table-striped table-hover fill-head">
<thead>
<tr>
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>DEPARTMENT</th>
<th>APPLIED DATE</th>
<th>LEAVE TYPE</th>
<th>REASON</th>
<th>FROM DATE</th>
<th>TO DATE</th>
<th>ACTION</th>

</tr>
</thead>
<tbody>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8");  ?>" accept-charset="UTF-8" method="post" class="form-horizontal">


<?php
$empid= $profres["id"];

$sql= $leaveCollection->find(array("emptype" => 'faculty', 'leavestatus' =>'Forwarded to Director'));

foreach($sql as $row)
{

?>

<tr>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["empdept"]; ?></td>
<td><?php echo $row["registerdate"]; ?></td>
<td><?php echo $row["leavetype"]; ?></td>
<td><?php echo $row["reason"]; ?></td>
<td><?php echo $row["fromdate"]; ?></td>
<td><?php echo $row["todate"]; ?></td>
<td><input type="checkbox" name="checkbox[]" class="largerCheckbox" value="<?php echo $row["_id"]; ?>" ></td>
</tr>


<?php

}

?>

<center><input type="submit" name="forwardleave" class="btn btn-primary btn-sm" value="ACCEPT LEAVE APPLICATION OF FACULTIES"></center>

<br>
<center><input type="submit" name="rejectleave" class="btn btn-danger btn-sm" value="REJECT LEAVE APPLICATION OF FACULTIES"></center>

<br>
</form>
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>

<?php require 'footer.php'; ?>