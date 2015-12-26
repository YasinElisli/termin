<?php
include '../db.php';
// error_reporting(E_ALL ^ E_NOTICE);
// ini_set('error_reporting', E_ALL ^ E_NOTICE);
session_start();
if (isset($_POST["submit"])) {
  $usernameEdit = $_POST["usernameEdit"];
  $nameEdit = $_POST['nameEdit'];
  $surnameEdit = $_POST['surnameEdit'];
  $emailEdit = $_POST['emailEdit'];
  $lastPassEdit = $_POST['lastPassEdit'];
  $newPassEdit = $_POST['newPassEdit'];
  $rePassEdit = $_POST['rePassEdit'];
  $birthEdit = $_POST['birthEdit'];
  $genderEdit = $_POST['genderEdit'];
}

$userEditID =  $_SESSION['user_id'];
$connection = mysqli_select_db($db_connection,$dbname);
$sqlUserEdit = "UPDATE user SET username = '$usernameEdit',firstname = '$nameEdit',lastname = '$surnameEdit',birthdate = '$birthEdit',email='$emailEdit',gender = '$genderEdit',password = '$newPassEdit' WHERE id = '$userEditID'";

$query=mysqli_query($db_connection,$sqlUserEdit);
if (mysqli_query($db_connection, $sqlUserEdit)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($db_connection);
}
header("location:../profile.php");
 ?>
