<?php include "menu.php"; ?>

<h2 style="text-align:center;"> WELCOME BACK, USER! </h2>
<form class="form-horizontal signinform" method="post" action="" style="width:500px; padding: 10px; margin:auto;">
  <div class="form-group">
    <label class="control-label col-sm-2" for="uname">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
        <div>
          Forgot your password? Click <a href="forgotPass.php">here</a>!
        </div>
      </div>
    </div>

  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-default" name="btnSignin">Sign In</button>
      &ensp;
      <button type="button" class="btn btn-default" name="btnCancel">Cancel</button>
    </div>
  </div>
</form>
<?php include "footer.php"; ?>
