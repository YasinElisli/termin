<?php
session_start();
include '../core.php';
include '../db.php';

$user_id_photo = $_SESSION['user_id'];


  global $fayl_adi;
  $fayl = $_FILES["pphoto"];
  $fayl_adi = $_FILES["pphoto"]["name"];
  $fayl_kecici_adres = $_FILES["pphoto"]["tmp_name"];
  $fayl_size = $_FILES["pphoto"]["size"];
  $fayl_type = $_FILES["pphoto"]["type"];
  $yeni_adres = "../img/".$fayl_adi;

  if(is_uploaded_file($fayl_kecici_adres)){
    if(($fayl_type=="image/png") || ($fayl_type=="image/jpeg")){
    move_uploaded_file($fayl_kecici_adres,$yeni_adres);
    }
    else{
      echo "sadece png ve jpeg formati qebul olunur";
    }
  }
  else{
    echo "fayl yuklenmedi";
  }
$connection = mysqli_select_db($db_connection,$dbname);
$sqlUploadPhoto = mysqli_query($db_connection,"UPDATE user SET user_photo= 'img/$fayl_adi' WHERE id = '$user_id_photo'");
if ($sqlUploadPhoto) {
  echo "Sekil secildi";
}
else {
  echo "error";
}
header("refresh:0; url=../profile.php?id=1");
 ?>
