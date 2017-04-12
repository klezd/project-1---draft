<?php
include "connection.php";
if(isset($_POST['username']))
{
 $uname_input = mysql_real_escape_string($_POST['username']);
 $checkusername = "SELECT count(*) as num FROM customers where username=".$uname_input;
 $count = $db->query($checkusername);
 console.log($count);
 if ($count != 0)
  {
  echo "<p id=\"check_username\" class=\"col-sm-offset-4 col-sm-8\" style=\"font-style:italic; font-weight:bold; display: block\">";
  echo "The username ".$uname_input." has exist</p>";
  }
}
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
 header('Location: home.php');
?>
