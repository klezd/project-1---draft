<?php include "navigator.php"; ?>
<h2 style="text-align:center;">Sign Up</h2>
<form method="post" action="" style="width:500px; padding: 10px; margin:auto;">
  <div class="form-group row">
    <label class="control-label col-sm-4" for="name">Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="email">Email </label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="uname">Username</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="uname" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="pwd">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="rePwd">Repeat Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="rePwd" placeholder="Enter password again" required>
      <script type="text/javascript">
      $(function() {
        $("#rePwd").keyup(function(){
        var password = $("#pwd").val();
        $("#validPass").html(password == $(this).val() ? "Passwords match." : "Passwords do not match!");
        });
      });
      </script>
      <div id="validPass"></div>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="tele">Telephone Number </label>
    <div class="col-sm-8">
      <input type="tel" class="form-control" id="tele" placeholder="Enter telephone number">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="add">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="add" placeholder="Enter address">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-8">
       &emsp;
      <button type="submit" class="btn btn-info" name="btnSignup">Sign Up</button>
      &emsp;
      <button type="button" class="btn" name="btnCancel">Cancel</button>
    </div>
  </div>
</form>
<br>
<?php include "footer.php"; ?>
