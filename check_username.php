<?php
$username_input = trim($_GET['username']);

if($username_input!="")
{
$sql="select username from customers where username='$username_input'";
$user_array=array();
$rdata=mysql_query($sql);
$res=mysql_fetch_array($rdata);
if($res['username']==$username_input)
{
echo " <p style=\"color:red;\"><b>\"$username_input\"</b> is not available.</p>";
}
else
{
echo "<p style=\"color:green;\"><b>\"$username_input\"</b> is available.</p>";
}
}
?>
