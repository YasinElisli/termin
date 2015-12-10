<!DOCTYPE html>
<html>
<head>
  <title>Profil Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
    .my_main{
  height: 550px;
  padding: 0px !important;
}
.my_profile_leftside{
  background: #DFEDD6;
  padding: 10px;
  padding-top: 50px;
  height: 100%;
  overflow: hidden;
}
.mypara{
  display: inline-block;
  padding-top: 20px;
  font-size: 13px;
}
.my_profile{
  padding-top: 10px;
  background: #f2f2f2;
  height: 100%;
}
.pp{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: url(profile/img/profil_pic.jpg);
}
.profil_username{
  padding-left: 1px;
  padding-right: 1px;
  font-size: 22px;
}
@media (min-width: 144px) {
  .pp{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-image: url(profile/img/profil_pic.jpg);
  background-size: cover;
}
.profil_username{
  padding-left: 1px;
  padding-right: 1px;
  font-size: 12px;
}
}
@media (min-width: 480px) {
  .pp{
  width: 65px;
  height: 65px;
  border-radius: 50%;
  background-image: url(profile/img/profil_pic.jpg);
  background-size: cover;
}
.profil_username{
  padding-left: 1px;
  padding-right: 1px;
  font-size: 14px;
}
}
@media (min-width: 768px) {
  .pp{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-image: url(profile/img/profil_pic.jpg);
  background-size: cover;
}
.profil_username{
  padding-left: 1px;
  padding-right: 1px;
  font-size: 17px;
}
}
@media (min-width: 992px) {
  .pp{
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background-image: url(profile/img/profil_pic.jpg);
  background-size: cover;
}
.profil_username{
  padding-left: 1px;
  padding-right: 1px;
  font-size: 20px;
}
}
@media (min-width: 1200px) {
  .pp{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-image: url(profile/img/profil_pic.jpg);
  background-size: cover;
}
}
  </style>
</head>
<body>
<div class="container my_main col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="my_profile_leftside col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<center><div class="pp"></div></center>
		<center><h3 class="profil_username">Username</h3></center>
		<center><p class="mypara">Qeydiyyat Tarixi:<p class="mypara">&nbsp;&nbsp;&nbsp;&nbsp;</p><p class="mypara">7.12.2015</p></center>
	</div>
	<div class="my_profile col-xs-10 col-sm-10 col-md-10 col-lg-10">
		
	  <ul class="nav nav-tabs">
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
      <h3>Add Termin</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
		
	</div>
</div>
</body>
</html>