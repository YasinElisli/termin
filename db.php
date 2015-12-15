<?php
$hostname = "localhost";
$username = "kerimovs_termin";
$password = "termin123";
$dbname = "kerimovs_termin";
//table-in adi
$table_users = "user";

$db_connection = mysqli_connect($hostname,$username, $password,$dbname)
   or die("Could not connect to db");
// $selectDb = mysqli_select_db($connectToServer,$dbname);
 ?>
