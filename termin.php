<?php ob_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Termin</title>
    <?php include 'link.php'; ?>
    <?php include 'script.php'; ?>
  </head>
  <body>
    <?php include 'searchWords.php'; ?>
    <?php include 'header.php'; ?>
      <div class="container terminMain">
        <div class="row">
          <div class="col-lg-12 padreset">
            <div class="topBanner"><center>1024 X 100 </center></div>
          </div>
        </div>
        <div class="row pull-left">
          <div class="col-lg-12 padreset">
            <div class="container-fluid">
          <div class="month row">
            <div class="mm">Daxil edilib: <?php echo $publ_date ?></div>
 <div class="term">Kategoriya: <?php echo $kategoriya ?></div>
   <ul class="sosial pull-right">
      <li><a href="#"><i class="fa fa-star  fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-share-alt fa-lg"></i></a></li>
   </ul>
        <div class="demo"><?php echo "<h3 class=\"terName\">".$termin."</h3>" ?></div>
        <div class="izah"><?php echo $termin_desc ?></div>
      <div class="button">
        <ul class="likeUnlike">
          <li>
            <a class="btn btn-success" href="#">
            <i class="fa fa-thumbs-o-up fa-lg"></i> 342</a>
          </li>
          <li>
            <a class="btn btn-danger" href="#">
            <i class="fa fa-thumbs-o-down fa-lg"></i> 11</a>
          </li>

        </ul>

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




  </body>
</html>
