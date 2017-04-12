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
 ?>
