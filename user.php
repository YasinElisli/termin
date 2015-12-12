<?php
// echo "started user.php<br>";
include "init.php";

/*
 *bu funksiya hansisa bir userin 
 *log olub olmadigini yoxlayir
 */
function logged_in() {
	/*
	 *sessiyanin stausunu yoxlayir, yeni bundan evvel start olub-
	 *olmadigini bilmek uchun. eger bir defe bir sehifede start olunubsa
	 *onda ehtiyac yoxdur yeninden start etmeye   
	 */
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
	return ((isset($_SESSION['user_id'])) ? true : false);
}

/*
 *bu funkiyada userin basada olub ve ya 
 *olmamasi yoxlanilir
 *return: true ve ya false deyer qaytarir	
 */
function user_exists($username) {
		//initialize valiables from global
		global $table_users, $db_connection;

		$sql = "SELECT COUNT(*) as num_of_users FROM $table_users WHERE username = '$username'";

		echo $sql."<br>";
		$result_query = mysqli_query($db_connection, $sql);

		$row = mysqli_fetch_assoc($result_query);
		$num_of_users = $row['num_of_users'];
		echo $num_of_users;
		return $num_of_users;
	}
/*
 *bu funkiya userin bazada tesdiq olundugunu ve ya 
 *olmadigini yoxlayir
 *return: true ve ya false deyer qaytarir	
 */
function user_active($username) {
		global $table_users, $db_connection;

		$sql = "SELECT user_verified as num_of_users FROM $table_users WHERE username = '$username' AND user_verified=1";
		$result_query = mysqli_query($db_connection, $sql);

		if ($result_query)
		     return true;
		else 
			 return false;
}
?>