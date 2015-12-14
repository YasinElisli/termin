<?php
$hostname = "localhost";
$username = "kerimovs_termin";
$password = "termin123";
$dbname = "kerimovs_termin";

$db_connection = mysqli_connect($hostname,$username, $password,$dbname)
   or die("Could not connect to db");
// $selectDb = mysqli_select_db($connectToServer,$dbname);
 ?>
