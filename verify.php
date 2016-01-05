<?php
include 'db.php';
$idTer = $_GET['id'];
echo $idTer;

$connection = mysqli_select_db($db_connection,$dbname);
$query=mysqli_query($db_connection,"UPDATE termin SET ter_verified = '1' WHERE termin_id = '$idTer'");
header("location:newTerm.php");
 ?>
