<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>Delete Employee</h1>
</div>
</div>
<!-- END Page Title -->
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
	$checkbox= $_POST['checkbox'];
	$count= count($checkbox);
	
	for($i=0;$i<$count;$i++)
	{
		$userCollection->remove(array("_id" => new MongoId($checkbox[$i])));
	 	//mysqli_query($conn,"DELETE FROM user WHERE id='$checkbox[$i]'");
	}

mysqli_close($conn);
header('Location:deleteemployee.php');
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
<h3><i class="fa fa-table"></i> EMPLOYEES LIST</h3>
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
<th>First Name</th>
<th>Last Name</th>
<th>E-MAIL</th>
<th>DESIGNATION</th>
<th>DEPARTMENT</th>
<th>Action</th>
<th></th>
</tr>
</thead>
<tbody>

 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8");  ?>" accept-charset="UTF-8" method="post" class="form-horizontal">

<?php
$sql= $userCollection->find(array("type" =>array('$ne' =>'admin')));

foreach($sql as $row)
{

?>
<tr>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["type"]; ?></td>
<td><?php echo $row["dept"]; ?></td>
<td><input type="checkbox" name="checkbox[]" class="largerCheckbox" value="<?php echo $row["_id"]; ?>"></td>
</tr>


<?php

}

?>
<center><input type="submit" class="btn btn-danger btn-sm" value="DELETE"></center>
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