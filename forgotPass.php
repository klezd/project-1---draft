<?php include "menu.php"; ?>

<h2 style="text-align:center;"> Reset Password </h2>
<form class="form-horizontal signinform" method="post" action="" style="width:500px; padding: 10px; margin:auto;">
  <div style="text-align:center;">
    If you forgot your password, fill in this form and the link to reset your password will be sent to your email address.
  </div> &nbsp;
  <div class="form-group">
    <label class="control-label col-sm-2" for="uname">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="uname" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-default" name="btnReset">Reset</button>
      &ensp;
      <button type="button" class="btn btn-default" name="btnCancel">Cancel</button>
    </div>
  </div>
</form>
<?php include "footer.php"; ?>
