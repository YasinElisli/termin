<div id="statistic">
        <ul class="list-group rightList">
            <li class="list-group-item headList">Ən çox oxunan 5 termin</li>

              <?php $queryMostReadRight = mostRead();
              $sira = 0;
              while ($termin1 = mysqli_fetch_assoc($queryMostReadRight)) {
                $sira++;
                echo '<li class="list-group-item listItem"><p>'.$sira.'.'.$termin1['termin'].'</p></li>';
              }; ?>
          </ul>

          <ul class="list-group rightList">
              <li class="list-group-item headList">Ən yeni 5 termin</li>

                <?php $queryNewestTerminRight = newestTermin();
                $sira = 0;
                while ($termin2 = mysqli_fetch_assoc($queryNewestTerminRight)) {
                  $sira++;
                  echo '<li class="list-group-item listItem"><p>'.$sira.'.'.$termin2['termin'].'</p></li>';
                }; ?>
            </ul>

        <ul class="list-group rightList">
            <li class="list-group-item headList">En reytingli 5 yazar</li>

              <?php $queryBestWriteRight = bestWriter();
              $sira2 = 0;
              while ($termin3 = mysqli_fetch_assoc($queryBestWriteRight)) {
                $sira2++;
                echo '<li class="list-group-item listItem"><p>'.$sira2.'.'.$termin3['username'].'</p></li>';
              }; ?>

            </ul>
        </div>
