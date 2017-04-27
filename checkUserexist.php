<?php
include "connection.php";
session_start();
$uname_input = $_POST['username'];
$checkusername = "SELECT username  FROM customers where username=?";
$result1 = $db->prepare($checkusername);
$result1->execute(array($uname_input));
$count1 = $result1->rowCount();

$email_input = $_POST['email'];
$checkemail = "SELECT email  FROM customers where email=?";
$result2 = $db->prepare($checkemail);
$result2->execute(array($email_input));
$count2 = $result2->rowCount();

if ($count1 != 0 || $count2 != 0 )
  {
  echo'
  <script>
    window.alert("Your username/email is not exist. Please check again!");
    setTimeout(function(){ window.open("forgotPass.php", "_self")}, 300);
  </script>';
  }
else
  {
    echo'
    <script>
      window.alert("Password reset link has been sent to your email");
      setTimeout(function(){ window.open("home.php", "_self")}, 500);
    </script>';
  }
?>
