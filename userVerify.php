<?php
include 'db.php';
include 'core.php';
session_start();
$mailGet = $_GET['mail'];
$kodGet = $_GET['kod'];

  $connection = mysqli_select_db($db_connection,$dbname);
  $query=mysqli_query($db_connection,"SELECT * FROM user WHERE  email	= '$mailGet' AND kod = '$kodGet' AND user_verified = '0'");
if (mysqli_num_rows($query) > 0) {
  $query1=mysqli_query($db_connection,"UPDATE user SET user_verified= '1' WHERE  email	= '$mailGet' AND kod = '$kodGet'");
  if ($query1) {
    if (!isset($_SESSION)) {
      session_start();
      $_SESSION['mailVerify'] = true;
    }
    header("Location:index.php");
  }
}
else {
  echo "Siz artiq emaili təstiq etmisiniz";
}




 ?>
