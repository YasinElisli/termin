<?php
if (isset($_SESSION['username'])) {
	myTermin();
}
else {
	header("Location:index.php");
}
 ?>
