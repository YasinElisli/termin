<?php
include 'db.php';
$idTer = $_GET['id'];
echo $idTer;

$today = date("Y-m-d  H:i:s");
$connection = mysqli_select_db($db_connection,$dbname);
$query=mysqli_query($db_connection,"UPDATE termin SET ter_verified = '1' WHERE termin_id = '$idTer'");
$query2=mysqli_query($db_connection,"UPDATE termin SET ter_pub_date = '$today' WHERE termin_id = '$idTer'");
header("location:newTerm.php");
 ?>
