<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "terminology";

$connectToServer = mysqli_connect($hostname,$username, $password,$dbname);
$selectDb = mysqli_select_db($connectToServer,$dbname);
 ?>
