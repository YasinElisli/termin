<?php
		include 'core.php';
		session_start();

		//response kimi qaytardigimiz deyer
		$data = array();

		if (isset($_SESSION['user_id'])) {
			$user_id = $_SESSION['user_id'];

			if (isset($_POST['term_id']) && isset($_POST['act']))  {

				$term_id = $_POST['term_id'];
				$act = $_POST['act'];

				if ($act==="like") {
						$table_name = "termin_like";
						$opposite_table = "termin_dislike";
						$table_column = "ter_num_like";
						$opposite_column = "ter_num_dislike";
				}
				else if ($act==="dislike") {
			   			$table_name = "termin_dislike";
			   			$opposite_table = "termin_like";
			   			$table_column = "ter_num_dislike";
			   			$opposite_column = "ter_num_like";
			   	}
				//yoxluyurug user like edib ya yox
				if (!previously_liked($user_id, $term_id, $table_name)) {

					$inserted = insert_like($user_id, $term_id, $table_name);

					if ($inserted)
						$data['result'] = "Success";
					else
						$data['result'] = "Fail";
					//yoxluyurug eger bundan evvel eks action atilibsa (eger user like edibse
					//baxirig evvelden dislike olunub ve eksine)
					if (previously_liked($user_id, $term_id, $opposite_table)) {
							//table-dan evvel atdigim addimi sil
							change_status_like($user_id, $term_id, $opposite_table);
							//(dis)like-in sayini azalt
							decrease_num_of_likes($term_id, $opposite_column);
							//buradan mueyyenleshdire bilecem ki men neyin sayini deyishdim
							//yeni sehifede hemchinin like ve ya dislike azaltmaliya
							$data['attr_changed'] = $opposite_column;
							change_writer_rating($term_id, $table_name);
					}
					$updated = update_num_of_likes($term_id, $table_column);

					//eger userin
					
						change_writer_rating($term_id, $table_name);
					


				} else
					$data['result'] = "Siz artıq bunu bəyənmisiz";
			} else
				$data['result'] = "Termin sechimi ile problem var";

	 }
	    else
			$data['result'] = "Like etmek ucun evvelce giris etmelisiniz!!";
		echo json_encode($data);

?>
