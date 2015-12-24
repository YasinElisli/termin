<?php 
		include 'core.php';
		session_start();

		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];

			if (isset($_POST['term_id']) && isset($_POST['act']))  {
				
				$term_id = $_POST['term_id'];
				$act = $_POST['act'];

				if ($act==="like") {
						$table_name = "termin_like";
						$table_column = "ter_num_like";
				}
				else if ($act==="dislike") {
			   			$table_name = "termin_dislike";
			   			$table_column = "ter_num_dislike";
			   	}

				//yoxluyurug user like edib ya yox
				if (!previously_liked($user_id, $term_id, $table_name)) {
					
					$inserted = insert_like($user_id, $term_id, $table_name);

					if ($inserted) 
						echo "Success";
					else 
						echo "Fail";

					$updated = update_num_of_likes($term_id, $table_column);

				} else 
					echo "Siz artıq bunu bəyənmisiz";
			} else 
				echo "Termin sechimi ile problem var"; 
			  
	 }
	    else 
			echo "You must first log in to like";
		

?>	