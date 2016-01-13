<ul class="list-group bookmarkList">
<?php

$userIDBook =  $_SESSION['user_id'];

include 'db.php';
$connection = mysqli_select_db($db_connection,$dbname);
$sql = "SELECT * FROM bookmark WHERE user_id = '$userIDBook' GROUP BY add_date DESC";
$query = mysqli_query($db_connection,$sql);
while ($row = mysqli_fetch_assoc($query)) {
	$usersTermin[] =  $row['termin_id'];
}
foreach ($usersTermin as $key => $value) {
	$sqlBookmark = "SELECT * FROM termin WHERE termin_id = '$value'";
	$query = mysqli_query($db_connection,$sqlBookmark);
	while ($row = mysqli_fetch_assoc($query)) {
		echo '<li class="list-group-item">'.$row['termin'].'<a href="#" class="pull-right" ><i class="fa fa-star  fa-lg" style="color:gold"></i></a></li>';
	}
}

 ?>
</ul>
<!-- <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 bookmark">
	<center><h3><a href="">Termin</a></h3></center>
	<strong><p class="desct">Desctription:&nbsp;</p></strong>
	<div id="div1">
		<p class="desct">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
</div> -->
