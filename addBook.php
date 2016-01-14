<?php

  ob_start();
  session_start();
  include 'db.php';
  $terBookmId = $_GET['id'];
  $colorBtn = $_GET['btncolor'];
  $userId_book = $_SESSION['user_id'];
  $today = date("Y-m-d  H:i:s");
  if ($colorBtn != "gold") {
    $connection = mysqli_select_db($db_connection,$dbname);
    $query=mysqli_query($db_connection,"INSERT INTO bookmark(user_id,termin_id,add_date) VALUES('$userId_book','$terBookmId','$today')");
  }

  //header('location:termin.php');//routing olmadigina gore islemir

 ?>
