<?php
	include 'db.php';
	if (isset($_POST)) {

		$termin = $_POST['search'];
		//Default deyerler. Yeni hetta oxsharlar da tapilmasa bunu gosterecek
		$termin_desc = "Bu termin üçün heç bir izahat yoxdur. Bəlkə özünüz izah edəsiniz?";
		$user_name = "Daxil edilməyib";
		$publ_date = "Daxil edilməyib";
		$kategoriya = "Daxil edilməyib";
		$termin_like = 0;
		$termin_dislike = 0;
		$like = "like";
		$termin_source = "";

		//mehs bu sozu axtar.
		$sql = "SELECT u.username, 
					   ter.termin_id, 
					   ter.termin, 
					   ter.termin_desc, 
					   ter.ter_pub_date, 
					   ter.ter_cat, 
					   ter.ter_num_like,
		 			   ter.ter_num_dislike,
		 			   ter.ter_source 
		 	    
		 	    FROM user AS u, termin AS ter WHERE u.id = ter.user_id AND ter.termin LIKE '$termin'";

		$query = mysqli_query($db_connection, $sql);
		//eger 1 dene deyer varsa, demeli baza da var
		if (mysqli_num_rows($query)) { 
				
					$first_row = mysqli_fetch_assoc($query);
					// $termin = $first_row['termin'];
					$termin_id = $first_row['termin_id']; // like ve unlike edende bilinsin
					$termin_desc = $first_row['termin_desc'];
					$user_name = $first_row['username'];
					$publ_date = $first_row['ter_pub_date'];
					$kategoriya = $first_row['ter_cat'];
					$termin_like = $first_row['ter_num_like'];
					$termin_dislike = $first_row['ter_num_dislike'];
					$termin_source = $first_row['ter_source'];
		} else {
			//oxshar terminleri axtar, yeni ichinde o achar soz olan 
			$sql = "SELECT u.username, ter.termin, ter.termin_desc, ter.ter_pub_date, ter.ter_cat FROM user AS u, termin AS ter WHERE u.id = ter.user_id
		 	AND ter.termin LIKE '%$termin%'";

			$query = mysqli_query($db_connection, $sql);
			//eger result bosh deyilse, hech olmasa 1 dene oxshar var
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