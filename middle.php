<div class="row" id="#panels">
  <div class="col-lg-3 popular">
    <div class="forborder">
      <h3><center> Ən çox oxunan</center> </h3>
      <ul class="termins">
        <?php $queryMostRead = mostRead();
        while ($termin = mysqli_fetch_assoc($queryMostRead)) {
          echo '<li class="article">
             <h4>
               <a href="#">'.$termin['termin'].'</a>
             </h4>
             <span class="date">
              '.$termin['ter_pub_date'].'
               <a href="#">'.$termin['ter_cat'].' </a>
             </span>
           </li>';
        }; ?>
      </ul>
    </div>
  </div>
  <div class="col-lg-3 popular">
    <div class="forborder">
      <h3><center>Ən sonuncu</center></h3>
      <ul class="termins">
        <?php $queryNewestTerm =  newestTermin();
        while ($yeniTerm = mysqli_fetch_assoc($queryNewestTerm)) {
          echo '<li class="article">
            <h4>
              <a href="#">'.$yeniTerm['termin'].'</a>
            </h4>
            <span class="date">
              '.$yeniTerm['ter_pub_date'].'
              <a href="#">'.$yeniTerm['ter_cat'].' </a>
            </span>
          </li>';}?>
      </ul>
    </div>
  </div>
  <div class="col-lg-3 popular">
    <div class="forborder">
      <h3><center>Populyar yazarlar</center></h3>
      <ul class="termins">
          <?php $queryBestWrite =  bestWriter();
          while ($yazar = mysqli_fetch_assoc($queryBestWrite)) {
            echo '<li class="article">
               <h4>
                 <a href="#">'.$yazar['username'].'</a>
               </h4>
               <span class="date">
                 Reytinq : 
                 <a href="#">'.$yazar['user_rating'].' </a>
               </span>
             </li>';
          }; ?>
        </ul>
      </div>
  </div>
  <div class="col-lg-3 popular">
    <div class="forborder norightborder">
      <h3 class="tag-heading"><center>Taglar</center></h3>
      <div class="row tagMain">
      <?php
      include 'db.php';
      $connection = mysqli_select_db($db_connection,$dbname);
      $sql = "SELECT * FROM tag GROUP BY tag_num DESC LIMIT 20";
      $query = mysqli_query($db_connection,$sql);
      while ($row = mysqli_fetch_assoc($query)) {
        $tagNum = $row['tag_num'];
        $tagName = $row['tag'];
        echo '
            <div class="col-lg-6 no-padding tagItem">
              <a href="#" class="tags">'.$tagName.' </a>
              <span class="item-multiplier-x">×</span>
              <span class="item-multiplier-count">'.$tagNum.'</span>

            </div>

          ';
      }
       ?>
</div>
  </div>
</div>
</div>
