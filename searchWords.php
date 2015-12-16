<?php
	include 'db.php';
	if (isset($_POST)) {

		$termin = $_POST['search'];
		$termin_desc = "Bu termin üçün heç bir izahat yoxdur. Bəlkə özünüz izah edəsiniz?";
		$user_name = "Daxil edilməyib";
		$publ_date = "Daxil edilməyib";
		$kategoriya = "Daxil edilməyib";

		// $sql = "SELECT termin, termin_desc FROM termin WHERE termin LIKE '%$searchq%' OR termin_desc LIKE '%$searchq%' "
		$sql = "SELECT u.username, ter.termin, ter.termin_desc, ter.ter_pub_date, ter.ter_cat FROM user AS u, termin AS ter WHERE u.id = ter.user_id
		 AND ter.termin LIKE '$termin'";

		$query = mysqli_query($db_connection, $sql);
		
		if (mysqli_num_rows($query)) { 
				
					$first_row = mysqli_fetch_assoc($query);
					// $termin = $first_row['termin'];
					$termin_desc = $first_row['termin_desc'];
					$user_name = $first_row['username'];
					$publ_date = $first_row['ter_pub_date'];
					$kategoriya = $first_row['ter_cat'];

		} else {
			//oxshar terminleri axtar, yeni ichinde o achar soz olan 
			$sql = "SELECT u.username, ter.termin, ter.termin_desc, ter.ter_pub_date, ter.ter_cat FROM user AS u, termin AS ter WHERE u.id = ter.user_id
		 	AND ter.termin LIKE '%$termin%'";

			$query = mysqli_query($db_connection, $sql);
			//eger result bosh deyilse
			if (mysqli_num_rows($query)) {
				//butun oxshar terminleri bu arraye yig ve sonra usere goster
				$oxshar_terminler = array();
				while ($row = mysqli_fetch_assoc($query)) {
					$oxshar_terminler[] = $row['termin'];
				}
				$termin_desc = "Oxşar terminlər: ";
				foreach ($oxshar_terminler as $key => $termin_value) {
					$termin_desc .= $termin_value.", ";
				}
			}

		}
		
		mysqli_close($db_connection);
	};
?>