<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>HISTORY OF LEAVES</h1>
</div>
</div>




<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i>HISTORY OF LEAVES</h3>
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
<th>DESIGNATION</th>
<th>DEPARTMENT</th>
<th>APPLIED DATE</th>
<th>LEAVE TYPE</th>
<th>REASON</th>
<th>FROM DATE</th>
<th>TO DATE</th>
<th>STATUS</th>

</tr>
</thead>
<tbody>


<?php
$leaveCollection= $db->selectCollection('applyleave');
$sql = $leaveCollection->find();

foreach($sql as $row)
{

?>
<tr>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["emptype"]; ?></td>
<td><?php echo $row["empdept"]; ?></td>
<td><?php echo $row["registerdate"]; ?></td>
<td><?php echo $row["leavetype"]; ?></td>
<td><?php echo $row["reason"]; ?></td>
<td><?php echo $row["fromdate"]; ?></td>
<td><?php echo $row["todate"]; ?></td>
<td><?php echo $row["leavestatus"]; ?></td>

</tr>


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