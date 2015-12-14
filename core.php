<?php
//butun error kodlari
$errors = array();
//Sayta daxil olanin sehifeni gore bilmesi ucun qeydiyyatdan kecmeli oldugunu xeber vern func.
function mustSign() {
  return "Qeydiyyatdan kecmeden termin elave ede bilmezsiniz<br />
  <a href='login.php'>Qeydiyyat</a>dan kecin
  ";
}
//user termin elave ede bilmesi ucun form
function addTermin(){
  return '<form class="terminForm">
<div class="form-group">
  <label for="terminInput">Termin</label>
  <input type="email" class="form-control" id="terminInput" placeholder="Termin">
</div>
<div class="form-group">
  <label for="termDesc">Izahatı</label>
  <textarea type="password" class="form-control" id="termDesc" placeholder="Qısa izahı daxil edin"></textarea>
</div>
<div class="form-group">
  <label for="kateqoriya">Kateqoriya</label>
  <select type="text" class="form-control" name="source" id="kateqoriya" placeholder="Əgər varsa">
    <option value="Digər">Digər</option>
    <option value="IT">IT</option>
    <option value="Tibb">Tibb</option>
    <option value="Kimya">Kimya</option>
    <option value="Riyaziyyat">Riyaziyyat</option>
  </select>
</div>
<div class="form-group">
  <label for="source">Mənbə</label>
  <input type="text" class="form-control" name="source" id="source" placeholder="Əgər varsa">
</div>
<div class="form-group">
  <label for="keyWord">Açar söz (arasında vergül qoymaqla)</label>
  <input type="text" class="form-control" name="keyWord" id="keyWord" placeholder="Tags">
</div>
<button type="submit" class="btn btn-default">Göndər</button>
</form>';
}
function bestWriter(){

}

function newestTermin(){

}
function mostSearch(){

}
function tags(){

}

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
	return ((isset($_SESSION['username'])) ? true : false);
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
