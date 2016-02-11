<?php
include 'db.php';
include 'core.php';
if (isset($_POST['submit'])) {

			$required_fields = array('username','password','password_retyped','email');

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
			$pphoto = "img/pf.png";
			$kod = md5(rand(0,1000));
			if(empty($name)){
				$name = "";
			}
			if(empty($surname)){
				$surname = "";
			}
			if(empty($birth)){
				$birth = "";
			}

			$user_data = array('username' => trim($_POST['username']),
							   'password' => trim($_POST['password']),
					   'password_retyped' => trim($_POST['password_retyped']),
								   'name' => trim($_POST['name']),
								  'email' => trim($_POST['email']),
									'surname' => trim($_POST['surname']),
									'birth' => trim($_POST['bdate']),
									'pphoto' => "img/pf.png",
									'kod' => $kod
								);
			//check password. break the process if no errors found
			//initialize empty array


			if (strlen($password) < 4)
				$errors[] = "Password is too short<br>";
			else if (strlen($password) > 40)
				$errors[] = "Password is too long<br>";

			if ($password !== $password_retyped) {
				$errors = "Şifrələr eyni deyil";
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$errors = "E-mail forması düzgün deyil";
			}

			if (user_exists($username)) {
				$errors[] = $username." artıq mövcuddur.Basqa istifadəçi adı yoxlayın<br>";
			}

			if (email_exists($email)) {
				$errors[] = $email." artiq mövcuddur.Basqa email  yoxlayın<br>";
			}


		// change it afterwards when the code for sending email is added
			$user_verified = true;
			if ($user_verified && empty($errors)) {
					register_user($user_data);	//add to database
					signin($username,$password)	;//session-larin yaranmasi ucun bu function cagrilir
					$to      = $email; // Send email to our user
					$subject = 'Signup | Verification'; // Give the email a subject
$message = '

Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$username.'
Password: '.$password.'
------------------------

Please click this link to activate your account:
http://108.179.232.92/~kerimovs/termin/userVerify.php?mail='.$email.'&kod='.$kod.'

'; // Our message above including the link

$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
					mail($to, $subject, $message, $headers); // Send our email
			}
			mysqli_close($db_connection);
		}

//print_r($errors);
?>
