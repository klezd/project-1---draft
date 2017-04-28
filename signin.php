<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<h2 style="text-align:center;"> Welcome back, USER! </h2>
<form  method="post" action="signin.php" style="width:500px; padding: 10px; margin:auto;">
  <fieldset class="border">
  <legend class="border"><h5>Sign in here</h5></legend>
  <div class="form-group row">
    <label class="control-label col-sm-2" for="username">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
  </div>
  <div class="form-group row">
    <label class="control-label col-sm-2" for="password">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-7 col-sm-8">

      <button type="submit" class="btn btn-info" name="btnSignin">Sign In</button>
      &ensp;
      <button type="button" class="btn" name="btnCancel">Cancel</button>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-offset-5 col-sm-8">
        <div>
          <br>
          Forgot your password? Click <a href="forgotPass.php">here</a>!
        </div>
    </div>

  </div>
</fieldset>
</form>

<?php
include "connection.php";
if(isset($_POST['btnSignin']))
{
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT password FROM customers where username=?";
  $result = $db->prepare($sql);
  $result->execute(array($username));

  $count = $result->rowCount();

  if($count==0){
  		echo "<script type=\"text/javascript\">alert(\"wrong username/password\");</script>"; /* User doesn't exist */
  	}
  	else {
  		$res2 = $result->fetchAll(PDO::FETCH_ASSOC);
  		foreach ($res2 as $value) {

  			if ($password == $value['password']) {
          $_SESSION['username'] = $username;
          $name_query = "SELECT name FROM customers where username=?"; /*get name of user from dtb */
          $name_statement = $db->prepare($name_query);
          $name_statement->execute(array($username));
          $name_result = $name_statement->fetchAll(PDO::FETCH_ASSOC);
          $_SESSION["name"]=$name_result[0]["name"];
          echo "<script>";
          echo "window.alert(\"You have successfully signed in!\");";
          echo "setTimeout(function(){ window.open(\"home.php\", \"_self\")}, 500);";
          echo "</script>"; /* Redirect browser to page home.php */
  				break;
  			}
        else {
  				echo "<script type=\"text/javascript\">alert(\"wrong username/password\");</script>"; /* Password didn't match */
  			}
  		}
  	}
}
if(isset($_POST['btnCancel']))
{
  echo "<script>setTimeout(function(){ window.open(\"home.php\", \"_self\")}, 200);</script>";
}
?>


<?php include "footer.php"; ?>
