<?php include "navigator.php"; ?>
<h2 style="text-align:center;">Sign Up</h2>
<form method="post" action="user_signup.php" style="width:500px; padding: 10px; margin:auto;" id="signupform">
  <fieldset class="border">
  <legend class="border">Please fill in all required infomation :</legend>

  <div class="form-group row">
    <label class="control-label col-sm-4" for="name">Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="email">Email </label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="username">Username</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username"  >
    </div>
  </div>

  <div class="form-group row">
    <label class="control-label col-sm-4" for="password">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="rePassword">Repeat Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="rePassword" id="rePassword" placeholder="Enter password again">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="telephone">Telephone Number </label>
    <div class="col-sm-8">
      <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Enter telephone number">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="address">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-8">

      <button type="submit" class="btn btn-info" name="btnSignup">Sign Up</button>
      &emsp;
      <button type="button" class="btn" name="btnCancel">Cancel</button>
    </div>
  </div>
</fieldset>
</form>
<br>
<?php
include "connection.php";
if(isset($_POST['btnCancel']))
{
  header("Location: home.php");
}
?>
<?php include "footer.php"; ?>
