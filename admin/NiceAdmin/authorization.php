<?php
include("db_config.php");
$username = $_SESSION['username'];
var_dump($username);

// Connect to server and select database.

mysqli_connect($host, $username, $password)or die("cannot connect"); 

mysqli_select_db($cn,$db_name) or die("cannot select DB");

$query=mysqli_query($cn,"SELECT * FROM admin_users WHERE username = '$username' AND usertype = 'admin'");

echo(mysqli_error($cn));

$num_rows = mysqli_num_rows($query);

?>