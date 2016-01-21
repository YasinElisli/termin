<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link rel="stylesheet" href="css/admin.css" media="screen" title="no title" charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <?php include 'db.php'; ?>
    <div class="container-fluid">
      <div class="row adminMain">
      <?php include 'adminLeft.php'; ?>
        <div class="col l10 right-panel">
          admin panel right
          <?php include 'editBtn.php'; ?>
       </div>
     </div>
      </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
