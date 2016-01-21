<?php
ob_start();
session_start();

// include 'script.php';
if (isset($_SESSION['username'])) {
  echo '<script type="text/javascript">
         $(document).ready(function() {
              console.log("removing");
          $(".dropdown").removeClass("disable");
         });
     </script>';
   }
   else {
     echo '<script type="text/javascript">
            $(document).ready(function() {
               $(".reg").removeClass("disable");
            });
          </script>';
        }
        if ($_SERVER['SCRIPT_NAME'] != "/~kerimovs/termin/index.php") {//online-da islemesi ucun
          echo '<script type="text/javascript">
                 $(document).ready(function() {
              $(".topSearch").removeClass("disable");
             });
             </script>';
   }
    include 'loginModal.php';
 ?>
<nav class="navbar navbar-default headNav">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="index.php">Termin</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-nav navbar-right container-full topMenu">
          <li><a href="addTermin.php">Termin əlavə et <span class="sr-only">(current)</span></a></li>
          <li class="reg disable"><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
          <li class="reg disable"><a href="#" data-toggle="modal" data-target="#loginModal" id="signupli">Qeydiyyat</a></li>
          <li class="dropdown disable">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?><span class="caret"></span></a>
            <ul class="dropdown-menu ">
              <li><a href="profile.php?id=1">Profil</a></li>
              <li><a href="logout.php">Çıxış</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left topSearch disable" role="search" action="termin.php">
          <div class="form-group">
            <input required type="text" class="form-control" placeholder="Termin axtarın">
          </div>
          <button type="submit" class="btn btn-default topSearchIco"><span class="glyphicon glyphicon-search"></span></button>
        </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
