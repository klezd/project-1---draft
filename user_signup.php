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


if ($count1 != 0)
  {
  echo'
  <script>
    window.alert("Your username is already exist!\n Please refill the form or sign in");
    setTimeout(function(){ window.open("signup.php", "_self")}, 1000);
  </script>';
  }
else if($count2 != 0)
  {
  echo'
  <script>
    window.alert("Your email has been used!\n Please refill the form or sign in");
    setTimeout(function(){ window.open("signup.php", "_self")}, 1000);
  </script>';
  }
else
  {
    $add=$db->prepare("INSERT INTO customers(name, email, phone, address, username, password) VALUES(:name, :email, :telephone, :address, :username, :password)");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $add->bindParam(':name', $name);
    $add->bindParam(':email', $email);
    $add->bindParam(':telephone', $telephone);
    $add->bindParam(':address', $address);
    $add->bindParam(':username', $username);
    $add->bindParam(':password', $password);

    $add->execute();
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    echo'
    <script>
      window.alert("You have successfully signed up!");
      setTimeout(function(){ window.open("home.php", "_self")}, 500);
    </script>';
}
?>
