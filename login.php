<?php
	include 'core.php';
	include 'db.php';
	// include "user.php";
	ob_start();
	if ($_POST['submit']) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		echo "This is a password  " . $password."<br>";

		if (empty($username) || empty($password)) {
			$errors[] = "You have to enter both username and account<br>";
		} else if (!user_exists($username)) {
			$errors[] = "That user does not exits<br>";
		} else if (!user_active($username)) {
			$errors[] = "You have not activated your account<br>";
		} else
			signin($username,$password);

	}



	print_r($errors);
?>
