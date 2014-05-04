<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
  echo'<script> window.location="index.php"; </script> ';
?>