<?php include "navigator.php"; ?>
<h2 style="text-align:center;">Sign Up</h2>
<form method="post" action="" style="width:500px; padding: 10px; margin:auto;" id="signupform">
  <div class="form-group row">
    <label class="control-label col-sm-4" for="name">Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="email">Email </label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="uname">Username</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="pwd">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="rePwd">Repeat Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="rePwd" placeholder="Enter password again" onChange=checkPassmatch() required>
    </div>
  </div>
  <script>
    function checkPassmatch() {
      $("#rePwd").keyup( function(){
      var $password = $("#pwd").val();
      $("#validPass").html($password == $(this).val() ? "Passwords match." : "Passwords do not match!");
      });
      }
    $(#rePwd).ready(function(){
      $("#validPass").keyup(checkPassmatch);
    });
  </script>
  <div id="validPass"></div>

  <div class="form-group row">
    <label class="control-label col-sm-4" for="tele">Telephone Number </label>
    <div class="col-sm-8">
      <input type="tel" class="form-control" id="tele" name="phone" placeholder="Enter telephone number">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="add">Address</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="add" name="add" placeholder="Enter address">
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
<? php
include "connection.php";
if(isset($_POST('btnSignup'))){
 $add=$db->prepare("INSERT INTO customers(name, email, phone, address, username, password) VALUES(:name, :email, :phone, :add, :uname, :pwd)"); //name
 $add->bindParam(':name', $name);
 $add->bindParam(':email', $email);
 $add->bindParam(':phone', $phone);
 $add->bindParam(':add', $add);
 $add->bindParam(':name', $uname);
 $add->bindParam(':pwd', $pwd);
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $add=$_POST['add'];
 $uname=$_POST['uname'];
 $pwd=$_POST['pwd'];
 $add->execute();
 }
 ?>
<?php include "footer.php"; ?>
