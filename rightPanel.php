<div id="statistic" class="container-fluid">
        <div class="panel panel-default most_search_term">
            <div class="panel-heading">En cox baxilan 5 termin</div>
            <ul class="list-group">
              <?php $queryMostReadRight = mostRead();
              $sira = 0;
              while ($termin2 = mysqli_fetch_assoc($queryMostReadRight)) {
                $sira++;
                echo '<li class="list-group-item mostReadItem">'.$sira.'.'.$termin2['termin'].'</p>';
              }; ?>


            </ul>
            </div>
        </div>
        <div class="panel panel-default newest_term">
            <div class="panel-heading">En son terminler</div>
            <div class="panel-body">

            <div class="disp-block">
            <span class="a-clas">1</span>
            <span class="a-clas">2</span>
            <span class="a-clas">3</span>
            <span class="a-clas">4</span>
            <span class="a-clas">5</span>
            <span class="a-clas">6</span>
            <span class="a-clas">7</span>
            <span class="a-clas">8</span>
            <span class="a-clas">9</span>
            <span class="a-clas">10</span>
            </div>
            <div class="disp-block"><a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                    <a class="a-clas" href="#">Lorem ipsum</a>
                </div>

            </div>
        </div>
        <div class="panel panel-default top_rated_wr">
            <div class="panel-heading">En reytingli 5 yazar</div>
            <ul class="list-group">
              <?php $queryBestWriteRight = bestWriter();
              $sira2 = 0;
              while ($termin3 = mysqli_fetch_assoc($queryBestWriteRight)) {
                $sira2++;
                echo '<li class="list-group-item mostReadItem">'.$sira2.'.'.$termin3['username'].'</p>';
              }; ?>
            </ul>
            </div>
        </div>
    </div>
