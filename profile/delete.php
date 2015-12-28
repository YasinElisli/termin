<?php
include '../db.php';
$idTer = $_GET['id'];

echo $idTer;

$connection = mysqli_select_db($db_connection,$dbname);
$query=mysqli_query($db_connection,"DELETE FROM termin WHERE termin_id = '$idTer'");

header("location:../profile.php?id=1");

 ?>
