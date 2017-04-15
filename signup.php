<?php include "navigator.php"; ?>
<h2 style="text-align:center;">Sign Up</h2>
<form method="post" action="user_signup.php" style="width:500px; padding: 10px; margin:auto;" id="signupform">
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
    <label class="control-label col-sm-4" for="username">Username</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="password">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-4" for="rePassword">Repeat Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" name="rePassword" id="rePassword" placeholder="Enter password again" required>
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
       &emsp;
      <button type="submit" class="btn btn-info" name="btnSignup">Sign Up</button>
      &emsp;
      <button type="button" class="btn" name="btnCancel">Cancel</button>
    </div>
  </div>
</form>
<br>
<?php
include "connection.php";
if( isset($_POST['btnSignup']) ){
 $add=$db->prepare("INSERT INTO customers(name, email, phone, address, username, password) VALUES(:name, :email, :telephone, :address, :username, :password)");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $telephone=$_POST['telephone'];
 $add=$_POST['address'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $add->bindParam(':name', $name);
 $add->bindParam(':email', $email);
 $add->bindParam(':telephone', $telephone);
 $add->bindParam(':address', $address);
 $add->bindParam(':username', $username);
 $add->bindParam(':password', $password);
 $add->execute();
 }
 ?>
<?php include "footer.php"; ?>
