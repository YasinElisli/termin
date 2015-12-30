<?php
	include 'db.php';

	if (isset($_POST['termin']) && isset($_POST['idAndColumn'])) {
			
			$termin = $_POST['termin'];
			$idAndColumn = $_POST['idAndColumn'];
			echo $termin ." ".$idAndColumn;
			$convertedToArray = explode(":", $idAndColumn);
			$column = $convertedToArray[0];
			$id = $convertedToArray[1];

			$sql = "UPDATE termin SET $column='$termin' WHERE termin_id=$id";

			$query = mysqli_query($db_connection, $sql);

			if ($query) 
				echo "Success";
			else echo "Fail";

			mysqli_close($db_connection);

	} else if (isset($_POST['termin_desc'])) {

			$termin_desc = $_POST['termin_desc'];
	}

?>