<div id="statistic" class="container-fluid">
        <ul class="list-group most_search_term">
            <li class="list-group-item">En cox baxilan 5 termin</li>

              <?php $queryMostReadRight = mostRead();
              $sira = 0;
              while ($termin2 = mysqli_fetch_assoc($queryMostReadRight)) {
                $sira++;
                echo '<li class="list-group-item mostReadItem"><p>'.$sira.'.'.$termin2['termin'].'</p></li>';
              }; ?>
          </ul>

          <ul class="list-group most_search_term">
              <li class="list-group-item">En cox baxilan 5 termin</li>

                <?php $queryMostReadRight = mostRead();
                $sira = 0;
                while ($termin2 = mysqli_fetch_assoc($queryMostReadRight)) {
                  $sira++;
                  echo '<li class="list-group-item mostReadItem"><p>'.$sira.'.'.$termin2['termin'].'</p></li>';
                }; ?>
            </ul>

        <ul class="list-group top_rated_wr">
            <li class="list-group-item">En reytingli 5 yazar</li>

              <?php $queryBestWriteRight = bestWriter();
              $sira2 = 0;
              while ($termin3 = mysqli_fetch_assoc($queryBestWriteRight)) {
                $sira2++;
                echo '<li class="list-group-item mostReadItem"><p>'.$sira2.'.'.$termin3['username'].'</p></li>';
              }; ?>

            </ul>
        </div>
