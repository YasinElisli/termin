<?php
include 'db.php';
if (isset($_POST['submit'])) {

			$required_fields = array('username','password','password_retyped','name','email','surname','bdate','gender');

			foreach ($_POST as $field => $user_input) {
				// echo $field. " ";
				if (empty($_POST[$field]) && in_array($field, $required_fields))
					$errors[] = "Fields marked with * are required <br>";
			}
			//deleting whitespaces
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$password_retyped = trim($_POST['password_retyped']);
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$surname = trim($_POST['surname']);
			$birth = trim($_POST['bdate']);
			$gender = $_POST['gender'];
			$pphoto = "img/pf.png";

			$user_data = array('username' => trim($_POST['username']),
							   'password' => trim($_POST['password']),
					   'password_retyped' => trim($_POST['password_retyped']),
								   'name' => trim($_POST['name']),
								  'email' => trim($_POST['email']),
									'surname' => trim($_POST['surname']),
									'birth' => trim($_POST['bdate']),
									'pphoto' => "img/pf.png",
									'gender' => $gender
								);
			//check password. break the process if no errors found
			//initialize empty array


			if (strlen($password) < 4)
				$errors[] = "Password is too short<br>";
			else if (strlen($password) > 40)
				$errors[] = "Password is too long<br>";

			if ($password !== $password_retyped) {
				$errors = "The passwords do not match";
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors = "E-mail is not correct";
			}

			if (user_exists($username)) {
				$errors[] = "Sorry, the username ".$username." is already taken. Try another one<br>";
			}

			if (email_exists($email)) {
				$errors[] = "Sorry, the email ".$email." is already in use. Try another one<br>";
			}

			var_dump($errors);
		// change it afterwards when the code for sending email is added
			$user_verified = true;
			if ($user_verified && empty($errors)) {
					register_user($user_data);	//add to database
					signin($username,$password)	;//session-larin yaranmasi ucun bu function cagrilir
			}
			mysqli_close($db_connection);
		}
?>
