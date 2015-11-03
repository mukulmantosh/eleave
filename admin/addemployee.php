<?php require 'header.php'; ?>
<?php require '../connection.php'; ?>

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1>Add Employee</h1>
</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Main Content -->
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-bars"></i>ADD EMPLOYEE</h3>
<div class="box-tool">
<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
<a data-action="close" href="#"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
 <form action="success_employee.php" accept-charset="UTF-8" method="post" class="form-horizontal">
<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">FIRSTNAME</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="text" name="firstname" class="form-control input-sm" required autocomplete="off" />
   </div>
</div>
<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">LASTNAME</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="text" name="lastname" class="form-control input-sm" required  autocomplete="off"/>
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">PHONE</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="text" name="phone"  class="form-control" required autocomplete="off" />
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">E-MAIL</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="email" name="email" class="form-control" required autocomplete="off" />
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">CREATE PASSWORD</label>
   <div class="col-sm-9 col-lg-10 controls">
  <input type="password" name="password" class="form-control" required autocomplete="off" />
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">USER TYPE</label>
   <div class="col-sm-9 col-lg-10 controls">
	<select class="form-control" name="usertype" >
    <option value="chairman" selected>CHAIRMAN</option>
    <option value="hod">HOD</option>
    <option value="faculty">FACULTY</option>
    <option value="director">DIRECTOR</option>
    <option value="principal">PRINCIPAL</option>
    </select>
   </div>
</div>

<div class="form-group">
   <label class="col-sm-3 col-lg-2 control-label">DEPARTMENT</label>
   <div class="col-sm-9 col-lg-10 controls">
	<select class="form-control" name="dept" >
    <option value="cse" selected>CSE</option>
    <option value="it">IT</option>
    <option value="etc">ETC</option>
    <option value="eee">EEE</option>
    <option value="mech">MECHANICAL</option>
    <option value="civil">CIVIL</option>
    <option value="nodept">NO DEPARTMENT</option>
    </select>
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