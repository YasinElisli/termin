<?php 
		include 'core.php';
		session_start();

		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];

			if (isset($_POST['term_id']))
				$term_id = $_POST['term_id'];
				$act = $_POST['act'];
			//yoxluyurug user like edib ya yox
			if (!previously_liked($user_id, $term_id)) {
				
				$inserted = insert_like($user_id, $term_id);

				if ($inserted) 
					echo "Success";
				else 
					echo "Fail";

				$updated = update_num_of_likes($term_id);

			} else 
				echo "You have already liked it";
		}
	    else 
			echo "You must first log in to like";
		

?>	