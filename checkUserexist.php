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


$checkemail = "SELECT email  FROM customers where username=?";
$result3 = $db->prepare($checkemail);
$result3->execute(array($username_input));
$count3 = $result3->rowCount();


if ($count1 == 0 )
  {
  echo'
  <script>
    window.alert("Your username is not exist. Please check again!");
    setTimeout(function(){ window.open("forgotPass.php", "_self")}, 300);
  </script>';
  }
  else if ($count2 == 0 )
    {
    echo'
    <script>
      window.alert("Your email is not exist. Please check again!");
      setTimeout(function(){ window.open("forgotPass.php", "_self")}, 300);
    </script>';
    }
    else if ($count3 == 0 )
      {
      echo'
      <script>
        window.alert("Your email and username are not matched. Please check again!");
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
