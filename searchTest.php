<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Termin</title>
    <?php include 'link.php'; ?>
    <?php include 'script.php'; ?>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <?php
    include 'db.php';
    $connection = mysqli_select_db($db_connection,$dbname);
    $searchWord = $_GET['search'];
    $terms = explode(" ",$searchWord);
    $query = "SELECT * FROM termin WHERE";
    $terminPart = 0;
    foreach ($terms as $key => $value) {
      $terminPart++;
      if ($terminPart == 1) {
        $query.= " termin LIKE '$value%' ";
      }
      else {
        $query .= " OR termin LIKE '$value%' ";
      }
    }
    $queryResult=mysqli_query($db_connection,$query);
    while ($row = mysqli_fetch_assoc($queryResult)) {
      echo $row['termin']."<hr>";
    }
    echo $query;
     ?>
  </body>
</html>
