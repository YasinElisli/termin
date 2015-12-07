<?php
	$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "terminology";

$connectToServer = mysqli_connect($hostname,$username, $password,$dbname);
$selectDb = mysqli_select_db($connectToServer,$dbname);

//collect
$output="";
if (isset($_POST['searchVal'])) {
	$searchq = $_POST['searchVal'];

	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	// echo $searchq;
	$query = mysqli_query($connectToServer,"SELECT * FROM user WHERE username LIKE '%$searchq%' OR firstname LIKE '%$searchq%'");
	$count = mysqli_num_rows($query);
	$output = "<ul>";
	if ($count == 0) {
		$output.= "<li>".$searchq."</li>";		
	} else {
		
		while ($row = mysqli_fetch_assoc($query)){
			$fname = $row['username'];
			$lname = $row['firstname'];
			$output .= "<li>".$fname." ".$lname."</li>";
		}
	}
	$output .= "</ul>";
}
echo $output;
?>