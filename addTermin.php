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
      <?php echo addTermin();
       ?>
    </div>




     <?php include 'footer.php'; ?>
  </body>
</html>
