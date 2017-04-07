<?php include "navigator.php"; ?>

<h2 style="text-align:center;"> Welcome back, USER! </h2>
<form  method="post" action="" style="width:500px; padding: 10px; margin:auto;">
  <fieldset>
  <legend> Sign in here </legend>
  <div class="form-group row">
    <label class="control-label col-sm-2" for="uname">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-2" for="pwd">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-offset-2 col-sm-6">

        <div>
          Forgot your password? Click <a href="forgotPass.php">here</a>!
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
</fieldset>
</form>
<?php include "footer.php"; ?>
