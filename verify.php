<?php
include 'db.php';
$idTer = $_GET['id'];

$today = date("Y-m-d  H:i:s");
$connection = mysqli_select_db($db_connection,$dbname);
$query=mysqli_query($db_connection,"UPDATE termin SET ter_verified = '1' WHERE termin_id = '$idTer'");
$query2=mysqli_query($db_connection,"UPDATE termin SET ter_pub_date = '$today' WHERE termin_id = '$idTer'");
$query3=mysqli_query($db_connection,"SELECT user_id FROM termin WHERE termin_id = '$idTer'");
while ($row = mysqli_fetch_assoc($query3)) {
  $userIDNumPost = $row['user_id'];
}
$query4=mysqli_query($db_connection,"UPDATE user SET  num_post = num_post + 1 WHERE id = '$userIDNumPost'");
header("location:newTerm.php");
 ?>
