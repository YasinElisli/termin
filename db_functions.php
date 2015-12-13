<?php
	echo "started db_functions";
	include 'init.php';
	
	function email_exists($email) {
		global $table_users, $db_connection;

		$sql = "SELECT COUNT(*) as num_of_emails FROM $table_users WHERE email = '$email'";
		$result_query = mysqli_query($db_connection, $sql);

		$row = mysqli_fetch_assoc($result_query);
		$num_of_emails = $row['num_of_emails'];
		return $num_of_emails;
	}

	function register_user($register_data) {
		// $register_data = array('username' => trim($_POST['username']),
		// 					   'password' => trim($_POST['password']),
		// 			   'password_retyped' => trim($_POST['password_retyped']),	 
		// 						   'name' => trim($_POST['name']),
		// 						  'email' => trim($_POST['email']),
		// 						 'mobile' => trim($_POST['mobile'])
		// 					);

		// change it afterwards when the code for sending email is added
		

		
				global $table_users, $db_connection;
				$table_columns = "(username, firstname, email, password)";
				$table_values = "('$register_data[username]', 
								  '$register_data[name]', 
								  '$register_data[email]', 
								  '$register_data[password]')";
				echo $table_values;

				$sql = "INSERT INTO $table_users ".$table_columns. " VALUES ".$table_values;
				
				$query = mysqli_query($db_connection, $sql);
				
				if ($query) {
					echo "inserted";
				} else {
					$errors[] =  "Error: " . $sql . mysqli_error($db_connection). "<br>";
				}
		
	}
?>