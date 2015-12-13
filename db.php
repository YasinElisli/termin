<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "terminology";

$db_connection = mysqli_connect($hostname,$username, $password,$dbname)
   or die("Could not connect to db");
// $selectDb = mysqli_select_db($connectToServer,$dbname);
 ?>
