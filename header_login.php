<?php
session_start();
if (isset($_SESSION['username']))
{
  echo'<script>
    $(document).ready(function(){
      $("#login").remove();
      $("#userfield").append("<tr>");
      $("#userfield").append("<td>");
      $("#userfield").append("<span class=\"nameholder\">Hello  '; echo $_SESSION["name"]; echo '! </span>");
      $("#userfield").append("</td>");
      $("#userfield").append("<td>");
      $("#userfield").append("<a href=\"signout.php\" class=\"font\" name=\"signout\">Sign out</a>");
      $("#userfield").append("</td>");
      $("#userfield").append("</tr>");
    });
  </script>';
}
 ?>
