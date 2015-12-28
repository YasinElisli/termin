<?php ob_start();?>
<?php
    include 'core.php';
    // include 'user.php';
?>
<div class="my_main col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="my_profile_leftside col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<center><div class="pp"></div></center>
		<center><h3 class="profil_username">
        <?php
              //eger user log in olubsa onda onun adini goster profile sehifesine
              if (logged_in()) {
                  //user daxil olanda, username session-in ichinde saxlanir
                  echo $_SESSION['username'];
              } else echo "Username";
        ?>
    </h3></center>
		<center>
            <p class="mypara">Qeydiyyat Tarixi:<p class="mypara">&nbsp;&nbsp;&nbsp;&nbsp;</p><p class="mypara">
              <?php
                //eger user log in olubsa onda onun adini qeydiyyet tarixini goster profile sehifesine
                  if (logged_in()) {
                      //user daxil olanda, reg_date session-in ichinde saxlanir
                      echo $_SESSION['user_reg_date'];
                  } else
                    echo "7.12.2015";
              ?>
            </p>
    </center>
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
