<?php
define("DB_HOST","localhost"); // your data base host
define("DB_USERNAME","root"); // your database username
define("DB_PASSWORD","");  // your database password
define("DB_DATABASE","niceadmin"); // your data base name

require_once('includes/classes/meekrodb.2.3.class.php'); // including the MeekroDB liborary


// Establish database conntection using MeekroDB
DB::$host=DB_HOST;
DB::$user=DB_USERNAME;
DB::$password=DB_PASSWORD;
DB::$dbName=DB_DATABASE;


?>