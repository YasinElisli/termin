<?php
include 'db.php';

//collect
$output="";
if (isset($_POST['searchVal'])) {
	$searchq = $_POST['searchVal'];

	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	// echo $searchq;
	$query = mysqli_query($db_connection,"SELECT * FROM termin WHERE termin LIKE '%$searchq%' OR termin_desc LIKE '%$searchq%'");
	$count = mysqli_num_rows($query);
	$output = "<ul>";
	if ($count == 0) {
		$output.= "<li>".$searchq."</li>";
	} else {

		while ($row = mysqli_fetch_assoc($query)){
			$termin = $row['termin'];
			$termin_desc = $row['termin_desc'];
			$output .= "<li>".$termin."</li>";
		}
	}
	$output .= "</ul>";
}
echo $output;
?>
