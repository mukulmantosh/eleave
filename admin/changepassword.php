<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>CHANGE PASSWORDS</h1>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="glyphicon glyphicon-qrcode"></i>
PASSWORDS LISTS</h3>
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
<th>DESIGNATION</th>
<th>CURRENT PASSWORD</th>
<th>CHANGE PASSWORD</th>
<th></th>
</tr>
</thead>
<tbody>


<?php

$user_password= $db->selectCollection('user');
$user_password_find= $user_password->find();

foreach($user_password_find as $row)
{

?>
 <form action="updatepassword.php" accept-charset="UTF-8" method="post" class="form-horizontal">
<tr>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["type"]; ?>    </td>
<td><strong><span style="color:#F00;"><?php echo $row["password"]; ?></span></strong></td>
<td><input type="password" name="changepassword" class="form-control" autocomplete="off" required></td>
<td><input type="hidden" name="id" class="form-control" value="<?php echo $row["_id"]; ?>" autocomplete="off" required></td>
<td><input type="submit" name="submit" class="btn btn-primary btn-sm" value="CHANGE PASSWORD"></td>
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