<?php
session_start();
session_destroy();

echo'
<script>
  window.alert("You have signed out!");
  setTimeout(function(){ window.open("home.php", "_self")}, 500);
</script>';
?>
