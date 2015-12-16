<?php ob_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Termin</title>
    <?php include 'link.php'; ?>
  </head>
  <body>
    <?php include 'searchWords.php'; ?>
    <?php include 'header.php'; ?>
      <div class="container terminMain">
        <div class="row">
          <div class="col-lg-12 padreset">
            <div class="topBanner"></div>
          </div>
        </div>
        <div class="row pull-left">
          <div class="col-lg-12 padreset">
            <div class="container-fluid">
          <div class="month">
            <div class="mm">Daxil edilib: <?php echo $publ_date ?></div>
 <div class="term">Kategoriya: <?php echo $kategoriya ?></div>
  <div class="sosial">
    <a href="#"><i class="fa fa-star  fa-lg"></i></a>
    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-facebook-official fa-lg"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
        <a href="#"><i class="fa fa-share-alt fa-lg"></i></a> </div>
        <div class="demo"><?php echo $termin ?></div>
        <div class="izah"><?php echo $termin_desc ?></div>
      <div class="button">
      <a href="#"><i class="fa fa-thumbs-o-up  fa-3x"></i></a>
      <a href="#"><i class="fa fa-thumbs-o-down  fa-3x"></i></a>

      </div>
      <div class="yazar" >Əlave etdi: <?php echo $user_name ?></div>
      <div class="random"><button type="button" class="btn btn-secondary">Random Termin</button></div>

      </div>

        </div>
      </div>
        </div>
          <div class="row pull-right">
            <div class="col-lg-12 padreset">
        <?php include "rightPanel.php"; ?>
      </div>
  </div>
</div>





</div>





    <?php include 'script.php'; ?>
  </body>
</html>
