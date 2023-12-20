<?php
// data base linked
 $cn = mysqli_connect("localhost","root","","niceadmin");
//  solving the database errors 
 if (!$cn) {
    echo"Data base is not Connected";
 }
?>