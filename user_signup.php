<?php
include "connection.php";

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
