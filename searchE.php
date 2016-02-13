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
    <?php include 'header.php';
          include 'core.php';
     ?>
    <div class="container">
      <div class="adBanner row">
        <div class="col-md-12">
          banner
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <?php
          include 'db.php';
          $connection = mysqli_select_db($db_connection,$dbname);
          $searchWord = $_GET['headersearch'];
          $terms = explode(" ",$searchWord);
          $query = "SELECT * FROM termin WHERE ter_verified = 1 AND";
          $terminPart = 0;
          foreach ($terms as $key => $value) {
            $terminPart++;
            if ($terminPart == 1) {
              $query.= " termin LIKE '$value%' OR termin LIKE '% $value%' ";
            }
            else {
              $query .= " OR termin LIKE '% $value%' ";
            }
          }
          $queryResult=mysqli_query($db_connection,$query);
          while ($row = mysqli_fetch_assoc($queryResult)) {
            echo '<a class="searchResult" href="termin.php?termin='.$row['termin'].'"><h2>'.$row['termin'].'</h2></a><p class="terDesc">'.$row['termin_desc'].'</p><hr>';
          }
          // echo $query;
           ?>
        </div>
        <div class="col-md-3 rightPanel">
          <?php include 'rightPanel.php'; ?>
        </div>
      </div>
     </div>
  </body>
</html>
