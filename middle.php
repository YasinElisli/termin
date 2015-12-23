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
                 Termin Sayı
                 <a href="#">'.$yazar['num_post'].' </a>
               </span>
             </li>';
          }; ?>
        </ul>
      </div>
  </div>
  <div class="col-lg-3 popular">
    <div class="forborder norightborder">
      <h3 class="tag-heading"><center>Taglar</center></h3>
      <div class="row">
        <div class="col-lg-6 no-padding">
          <a href="#" class="tags"> IT </a>
          <span class="item-multiplier-x">×</span>
          <span class="item-multiplier-count">9213</span>
          <div class="excerpt">
            İnformasiya ehtiyatlarından istifadə olunması proseslərinin ağırlığını azaltmaq, onların etibarlığını və operativliyini çoxaltmaq məqsədilə informasiyanın toplanması, emalı, saxlanması, ötürülməsini təmin edən və texnoloji zəncirdə birləşdirən metodlar, istehsal prosesləri və texniki-proqram vasitələri toplusu.
          </div>
        </div>
        <div class="col-lg-6 no-padding">
          <a href="#" class="tags"> Diger </a>
          <span class="item-multiplier-x">×</span>
          <span class="item-multiplier-count">5553</span>
          <div class="excerpt">
            Diger terminler
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 no-padding">
          <a href="#" class="tags"> Sağlamlıq </a>
          <span class="item-multiplier-x">×</span>
          <span class="item-multiplier-count">2343</span>
          <div class="excerpt">
            insan sağlamlığını qorumaq və möhkəmləndirmək üçün müxtəlif xəstəlikləri və patoloji vəziyyətləri öyrənən, insan orqanizmində normal və patoloji proseslərin tədqiqatı üzrə elmi və praktik fəaliyyət sahəsidir.
          </div>
         </div>
         <div class="col-lg-6 no-padding">
          <a href="#" class="tags"> Tarix </a>
          <span class="item-multiplier-x">×</span>
          <span class="item-multiplier-count">1112</span>
          <div class="excerpt">
          mənbələr üzrə insanın meydana gəlməsi və inkişafını, müxtəlif xalqların ən qədim zamanlardan bizim dövrümüzədək necə yaşamaları, onların həyatlarında hansı hadisələrin baş verməsi, insan cəmiyyətlərinin həyatı necə və niyə dəyişib indi mövcud olduğu hala düşməsini öyrənən elmdir.
          </div>
         </div>
      </div>
      <div class="row">
        <div class="col-lg-6 no-padding">
          <a href="#" class="tags"> Hardware </a>
          <span class="item-multiplier-x">×</span>
          <span class="item-multiplier-count">244</span>
          <div class="excerpt">
            Hardware Təchizat - Kompüterin elektron / elektromexanik və mexaniki aksamına verilən ümumi addır.
          </div>
         </div>
         <div class="col-lg-6 no-padding">
          <a href="#" class="tags"> Softwere </a>
          <span class="item-multiplier-x">×</span>
          <span class="item-multiplier-count">114</span>
          <div class="excerpt">
            Komputerin proqram təminatı
          </div>
         </div>
      </div>
  </div>
</div>
</div>
