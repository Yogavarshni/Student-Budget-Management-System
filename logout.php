<?php 
session_start();

session_unset();//frees all session variables
session_destroy();
header("location: 3_Login.php");
exit;
?>