<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>APPLY FOR LEAVE</h1>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-bars"></i>Apply</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
 <form action="leave_success.php" accept-charset="UTF-8" method="post" class="form-horizontal">

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">LEAVE TYPE</label>
   <div class="col-sm-9 col-lg-10 controls">
  <select class="form-control" name="leavetype" >
    <option value="Earned Leave" selected>Earned Leave</option>
    <option value="Sick Leave">Sick Leave</option>
    <option value="Maternity Leave">Maternity Leave</option>
    <option value="Study Leave">Study Leave</option>
    <option value="Other Leave">Other Leave</option>
    <option value="Casual Leave">Casual Leave</option>
    </select>
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">FROM:</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="date" name="fromdate" class="form-control input-sm" required  autocomplete="off"/>
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">TO:</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="date" name="todate"  class="form-control input-sm" required autocomplete="off" />
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">REASON</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="text" name="reason" class="form-control" required autocomplete="off" />
   </div>
</div>




<div class="form-group">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
   <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
      <button type="reset" class="btn btn-danger"><i class="glyphicon glyphicon-off"></i> Reset</button>

</div>
</div>
 </form>
</div>
</div>
</div>
</div>


<?php require 'footer.php'; ?>