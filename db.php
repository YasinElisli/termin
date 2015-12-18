<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "terminology";
//table-in adi
$table_users = "user";

$db_connection = mysqli_connect($hostname,$username, $password,$dbname)
   or die("Could not connect to db");
   mysqli_set_charset($db_connection,"utf8");
// $selectDb = mysqli_select_db($connectToServer,$dbname);
 ?>
