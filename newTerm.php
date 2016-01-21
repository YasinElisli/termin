<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link rel="stylesheet" href="css/admin.css" media="screen" title="no title" charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Yeni terminler</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row adminMain">
    <?php include 'adminLeft.php'; ?>
    <div class="col l10 right-panel">
      <?php
      include 'db.php';
        $connection = mysqli_select_db($db_connection,$dbname);
        $query=mysqli_query($db_connection,"SELECT * FROM termin WHERE ter_verified = '0'");
        $sira = 0;
        while ($termin1 = mysqli_fetch_assoc($query)) {
          $sira++;
          echo '<li class="list-group-item listItem newTermin"><span>'.$sira.'.'.$termin1['termin'].'</span>
          <a href="verify.php?id='.$termin1['termin_id'].'"><button class="verify">tesdiqle</button></a>
          </li>
          <li><b>Izahat:</b>'.$termin1['termin_desc'].'</li>
          ';
        };
       ?>
      <?php include 'editBtn.php'; ?>
   </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
