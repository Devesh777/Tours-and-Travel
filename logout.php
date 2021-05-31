<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pass']);
session_destroy();
echo "<script> window.open('homepage.php','_self')</script>";
exit;
?>