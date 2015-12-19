<?php
//butun error kodlari
$errors = array();
//Sayta daxil olanin sehifeni gore bilmesi ucun qeydiyyatdan kecmeli oldugunu xeber vern func.
function mustSign() {
  return '<div class="row addTerminMess">
    <p>Termin elave etmek ucun<br/> qeydiyyatdan kecmeli ve ya login olmalisiniz</p>
  </div>';
}
//user termin elave ede bilmesi ucun form
function addTermin(){
  return '<form class="terminForm" action="addTermin.php" method="POST">
<div class="form-group">
  <label for="terminInput">Termin</label>
  <input type="text" class="form-control" id="terminInput" placeholder="Termin" name="termin">
</div>
<div class="form-group">
  <label for="termDesc">Izahatı</label>
  <textarea type="password" class="form-control" id="termDesc" placeholder="Qısa izahı daxil edin" name="termin_desc"></textarea>
</div>
<div class="form-group">
  <label for="kateqoriya">Kateqoriya</label>
  <select type="text" class="form-control"  id="kateqoriya" placeholder="Əgər varsa"  name="ter_cat">
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
<button type="submit" class="btn btn-default" name="submit">Göndər</button>
</form>';
}
function myTermin(){
  include 'db.php';
  $start = 0;
  $limit = 3;

  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $start=($id-1)*$limit;
  }

  $userID = $_SESSION['user_id'];
  //echo myTermin();
  $connection = mysqli_select_db($db_connection,$dbname);

//$sqlMyTer = "SELECT * FROM termin WHERE user_id = $userID";
  $query=mysqli_query($db_connection,"SELECT * FROM termin WHERE user_id= $userID LIMIT $start, $limit");

  while ($query2 = mysqli_fetch_assoc($query)) {

             echo '<div class="my_termin">
  				   	<h3 class="disp_in-block">
  				   		<a href="">'.$query2["termin"].'</a>
  				   	</h3>
  				   	<div class="disp_in-block float_r">
  				   		<div>
  				   			<button class="glyphicon glyphicon-pencil edit_button"></button>
  				   		</div>
  				   		<div>
  				   			<button class="glyphicon glyphicon-trash delete_glyphico"></button>
  				   		</div>
  				   	</div>
  				   	<div class="disp_in-block float_r date_div">
  				   		<p class="disp_in-block date">Add date:&nbsp;</p>
  				   		<p class="disp_in-block date_time">9-12-2015</p>
  				   	</div>
  				   	<strong><p class="desct">Izahat:&nbsp;</p></strong>
  				   	<div id="div1">
  				   		<p class="desct">'.$query2["termin_desc"].'</p>
  				   	</div>
  				   </div><br>';


  }

      $rows=mysqli_num_rows(mysqli_query($db_connection,"SELECT * FROM termin WHERE user_id= $userID"));
      $total=ceil($rows/$limit);
      echo "<ul class='pagination page'>";
      for($i=1;$i<=$total;$i++)
      {
      if($i==$id) { echo "<li class='current'><a>".$i."</a></li>"; }

      else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
      }
      echo "</ul>";
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

	/**
	 *bu funkiyada userin basada olub ve ya
	 *olmamasi yoxlanilir
	 *@return: true ve ya false deyer qaytarir
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
	/**
	 *bu funkiya userin bazada tesdiq olundugunu ve ya
	 *olmadigini yoxlayir
	 *@return: true ve ya false deyer qaytarir
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

    /**
     *bu funksiya yoxlayir bu email bazada var ya yox
     *@return sorgunun neticesini qaytarir. yeni sorgunun neticesi 0,
     *yeni bele email-den 0 denedir, yeni false. eks halda, 1 qaytaracag, yeni true
	 */
	function email_exists($email) {
			global $table_users, $db_connection;

			$sql = "SELECT COUNT(*) as num_of_emails FROM $table_users WHERE email = '$email'";
			$result_query = mysqli_query($db_connection, $sql);

			$row = mysqli_fetch_assoc($result_query);
			$num_of_emails = $row['num_of_emails'];
			return $num_of_emails;
	}

	/**
	 *@param register_data userin daxil etdiyi deyerlerden ibaret olan array
	 *bu funksiya yeni useri user table-na elave etsek
	 *@return bazaya daxil etse inserted yazir, eks halda db error-u gosterir
	 */
	function register_user($register_data) {

				global $table_users, $db_connection;
				$today = date("Y-m-d");

				$table_columns = "(username, firstname, email, password, reg_date)";
				$table_values = "('$register_data[username]',
								  '$register_data[name]',
								  '$register_data[email]',
								  '$register_data[password]',
								  '$today')";
				// echo $table_values;

				$sql = "INSERT INTO $table_users ".$table_columns. " VALUES ".$table_values;

				$query = mysqli_query($db_connection, $sql);

				if ($query) {
					if (!isset($_SESSION)) {
        				session_start();
   					}
					$_SESSION['username'] = $register_data['username'];
					$_SESSION['user_reg_date'] = $today;
					//qeydiyyatdan kechmish userin yeni profiline kech
					header('Location: profile.php');
				} else {
					$errors[] =  "Error: " . $sql . mysqli_error($db_connection). "<br>";
				}

	}
	function elaveTermin(){
		include('db.php');

			$termin = $_POST['termin'];
			$termin_desc = $_POST['termin_desc'];
			$ter_cat = $_POST['ter_cat'];

			$selecet= "SELECT * FROM termin WHERE termin='$termin'";
			$result=mysqli_query($db_connection,$selecet);
			 $num_rows=mysqli_num_rows ($result);
			 echo $num_rows;

				if($num_rows>0){
				echo " termin artiq movcuddur";


				} else {

					$user=$_SESSION['user_id'];
					$today = date("Y-m-d");
						$add = "INSERT INTO termin(user_id,termin, termin_desc, ter_cat,ter_pub_date) VALUES('$user','$termin', '$termin_desc', '$ter_cat','$today')";
						$insert = mysqli_query($db_connection,$add);

						if($insert){

						  // header("Location:index.php");
							echo "ay qaaaa alindidaaaaa elcekkkkk!!!!";

						}else{

						  echo 'ay qaaaaa alinmadidaaaa!!!';

				}
			}
		}


 ?>
