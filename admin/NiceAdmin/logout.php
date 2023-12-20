<?php
// season start
session_start();
// session destroy
unset($_SESSION['username']);
header("Location:login.php");

?>