<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>LEAVE CANCELLATION</h1>
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



<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i>LEAVE CANCELLATION</h3>
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
<th>APPLIED DATE</th>
<th>LEAVE TYPE</th>
<th>REASON</th>
<th>FROM DATE</th>
<th>TO DATE</th>
<th>STATUS</th>
<th>CANCEL</th>

</tr>
</thead>
<tbody>
 
<?php
$empid= $profres["_id"];

$sql =$leaveCollection->find(array("empid" => new MongoId($empid)));

foreach($sql as $row)
{

?>
<form action="leave_cancellation.php" accept-charset="UTF-8" method="post" class="form-horizontal">

<tr>
<td><?php echo $row["registerdate"]; ?></td>
<td><?php echo $row["leavetype"]; ?></td>
<td><?php echo $row["reason"]; ?></td>
<td><?php echo $row["fromdate"]; ?></td>
<td><?php echo $row["todate"]; ?></td>
<td><?php echo $row["leavestatus"]; ?></td>
<td><input type="hidden" name="id" value="<?php echo $row["_id"]; ?>"></td>
<td><input type="submit" class="btn btn-danger btn-sm" value="CANCEL LEAVE"></td>
</tr>
</form>


<?php

}

?>
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>

<?php require 'footer.php'; ?>