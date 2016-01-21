<?php ob_start();?>
<?php
    include 'core.php';

    $queryEdit =  userData();
   while ($row = mysqli_fetch_assoc($queryEdit)) {
     $dbPPhoto = $row['user_photo'];
   }
   include 'db.php';
   $userID =  $_SESSION['user_id'];
   $userRating = [];
   $connection = mysqli_select_db($db_connection,$dbname);
   $query2=mysqli_query($db_connection,"SELECT * FROM termin WHERE user_id = '$userID'");
   while ($row = mysqli_fetch_assoc($query2)) {
     $userRating[] = $row['ter_num_like'];
   }
    $userRat = array_sum($userRating);
    $query=mysqli_query($db_connection,"UPDATE user SET user_rating = '$userRat' WHERE id = '$userID'");
?>
<div class="my_main col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="my_profile_leftside col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<center><div class="pp" style="background:url('<?php echo $dbPPhoto; ?>');background-size:cover">
  </div></center><br>
    <form class="addPhotoForm" action="profile\upload.php" method="POST" enctype="multipart/form-data">
      <!-- <input type="file" accept="image/*"> -->
      <ul class="uploadBtn">
        <li class="pull-left">
          <input type="file" name="pphoto" accept="image/*" class="filestyle" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText=" Sekil seçin">
        </li>
        <li class="pull-left">
          <button type="submit" class="btn btn-success">
						<span class="glyphicon glyphicon-ok"></span> OK
					</button>
        </li>
      </ul>
    </form><br>
    <!-- <center><span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-camera fa-stack-1x fa-inverse addPhoto"></i>
   </span><center> -->
		<center><p class="profil_username">
        <?php
              //eger user log in olubsa onda onun adini goster profile sehifesine
              if (logged_in()) {
                  //user daxil olanda, username session-in ichinde saxlanir
                  echo $_SESSION['username'];
              } else echo "Username";
        ?>
    </p></center>
		<center>
            <span class="">Qeydiyyat Tarixi:</span><br /><br /><span>
              <?php
                //eger user log in olubsa onda onun adini qeydiyyet tarixini goster profile sehifesine
                  if (logged_in()) {
                      //user daxil olanda, reg_date session-in ichinde saxlanir
                      echo $_SESSION['user_reg_date'];
                  } else
                    echo "7.12.2015";
              ?>
            </span>
    </center><br />
    <center><?php echo "Istifadəçi reytinqi : ".$userRat; ?></center>
	</div>
	<div class="my_profile col-xs-10 col-sm-10 col-md-10 col-lg-10">

	  <ul class="nav nav-tabs profilNav">
	    <li class="active"><a data-toggle="tab" href="#MyTermin">My Termin</a></li>
	    <li><a data-toggle="tab" href="#Bookmarks">Bookmarks</a></li>
	    <li><a data-toggle="tab" href="#ProfileEdit">Profile Edit</a></li>
	    <li><a data-toggle="tab" href="#Badges">Badges</a></li>
	    <li><a data-toggle="tab" href="#addtermin">Add Termin</a></li>
	  </ul>
  <div class="tab-content">
    <div id="MyTermin" class="tab-pane fade in active">
      <?php include "my_termin.php"; ?>
    </div>
    <div id="Bookmarks" class="tab-pane fade">
      <?php include "bookmarks.php"; ?>
    </div>
    <div id="ProfileEdit" class="tab-pane fade">
      <?php include "profileedit.php"; ?>
    </div>
    <div id="Badges" class="tab-pane fade">
      <h3>Badges</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="addtermin" class="tab-pane fade">
    <?php echo addTermin();
              elaveTermin();
     ?>
    </div>
  </div>
</div>
	</div>
</div>
