<?php ob_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Termin.az</title>
    <?php include 'link.php';
          include 'core.php'; ?>
  </head>
  <body>
    <?php include 'script.php'; ?>

      <?php include 'header.php';?>
      <div class="container addTerminMain">
      <?php
      if (isset($_SESSION['username'])) {
        echo addTermin();
      }
       else {
         echo mustSign();
       }
       ?>
       <?php
       if(isset($_POST['submit'])) {
        elaveTermin();
       }
              ?>
    </div>




     <?php include 'footer.php'; ?>
  </body>
</html>
