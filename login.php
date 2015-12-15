<?php
	include 'core.php';
	include 'db.php';
	// include "user.php";

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


	function signin($user_name,$user_password) {
		
		include 'db.php';
		echo "username: ".$user_name."<br>";
		echo "password: ".$user_password."<br>";
		$sql = "SELECT * FROM user WHERE username='$user_name'";
		$query = mysqli_query($db_connection, $sql);

		$numrow = mysqli_num_rows($query);

		if ($numrow === 1) {

			while ($row = mysqli_fetch_assoc($query)) {
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbregdate = $row['reg_date'];
				$dbuserID = $row['id'];
			}

			echo "username ".$user_name." dbusername ". $dbusername."<br>";
			echo "password ".$user_password." dbpassword ". $dbpassword."<br>";
			//check with the given data

			if ($dbusername==$user_name && $dbpassword==$user_password) {
				echo "You are now logged in<br>";
				/*session-a yuklenen butun datalar profile sehifesinde
				 * lazim olacag ki muvafig yerlerde gosterilsin
				 */
				if (!isset($_SESSION)) { 
        			session_start(); 
   				} 
				$_SESSION['username'] = $user_name;
				$_SESSION['user_id'] = $dbuserID;
				$_SESSION['user_reg_date'] = $dbregdate;
				//redirect user to new Welcome user page
				// header('Location: profile.php');
			} else {
				echo "incorrect password";
			}
 		} else {
			die("That user does not exist");
		}
	}

	print_r($errors);
?>
