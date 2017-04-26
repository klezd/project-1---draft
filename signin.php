<?php include "navigator.php"; ?>
<?php include "header_login.php"; ?>
<h2 style="text-align:center;"> Welcome back, USER! </h2>
<form  method="post" action="signin.php" style="width:500px; padding: 10px; margin:auto;">
  <fieldset>
  <legend> Sign in here </legend>
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
      &emsp;&ensp;&nbsp;
      <button type="submit" class="btn btn-info" name="btnSignin">Sign In</button>
      &ensp;
      <button type="button" class="btn" name="btnCancel">Cancel</button>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-offset-6 col-sm-8">
        <div>
          <br>
          &nbsp;
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

  $sql = "SELECT password FROM customers where username=\"".$username."\"";
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
          $name_query = "SELECT name FROM customers where username='$username'"; /*get name of user from dtb */
          $_SESSION['name'] = $db->execute($name_query);
          echo'
          <script>
            window.alert("You have successfully signed in!");
            setTimeout(function(){ window.open("home.php", "_self")}, 500);
          </script>'; /* Redirect browser to page home.php */
  				exit();
  			}
        else {
  				echo "<script type=\"text/javascript\">alert(\"wrong username/password\");</script>"; /* Password didn't match */
  			}
  		}
  	}
}
if(isset($_POST['btnCancel']))
{
  header("Location: home.php");
}
?>


<?php include "footer.php"; ?>
