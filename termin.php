<?php ob_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Termin</title>
      <?php include 'link.php'; ?>
      <?php include 'script.php'; ?>
      <link rel="stylesheet" type="text/css" href="css/button.css">
  </head>
  <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <?php

          //include 'searchWords.php';
          include 'header.php';
          include 'core.php';
          include 'db.php';
          $connection = mysqli_select_db($db_connection,$dbname);

    $terminGet = $_GET['termin'];
    $query=mysqli_query($db_connection,"SELECT * FROM termin WHERE termin = '$terminGet' ");
    while($row = mysqli_fetch_assoc($query)) {
        $termin_id = $row['termin_id'];
        $termin = $row['termin'];
        $terDesc = $row['termin_desc'];
        $terPublish = $row['ter_pub_date'];
        $terLike = $row['ter_num_like'];
        $terDislike = $row['ter_num_dislike'];
        $terCat = $row['ter_cat'];
        $terSource = $row['ter_source'];
        $addUserID = $row['user_id'];
    }
    if (isset($_SESSION['user_id'])) {
        $userID = $_SESSION['user_id'];
        $query=mysqli_query($db_connection,"SELECT * FROM bookmark WHERE user_id = '$userID' AND termin_id = '$termin_id'");
        $numRow = mysqli_num_rows($query);
        $btnColor = "";
        if ($numRow > 0) {
            $btnColor = "gold";
        }
    }
    $query=mysqli_query($db_connection,"SELECT * FROM user WHERE id = '$addUserID' ");
    while($row = mysqli_fetch_assoc($query)){
        $userName = $row['username'];
    }
    ?>
      <div class="container-fluid terminMain">
        <div class="row">
          <div class="col-lg-12 padreset">
            <div class="topBanner"><center>1024 X 100 </center></div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 terminLeft">
            <div class="col-md-12 pull-left terminResult ">
              <ul class="pubCat pull-left">
                <li class="mm ">Daxil edilib: <?php echo $terPublish ?></li>
                <li class="term">Kategoriya: <?php echo $terCat ?></li>
              </ul>
              <ul class="sosial pull-right">
                <li><a href="addBook.php?id=<?php echo $termin_id."&btncolor=".$btnColor;?>" ><i class="fa fa-star  fa-lg" style="color:<?php echo $btnColor;?>"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-share-alt fa-lg"></i></a></li>
              </ul>
              <div class="demo"><?php echo "<h3 class=\"terName\">".$termin."</h3>" ?></div>
              <div class="izah"><?php echo $terDesc ?></div>
              <div class="button">
              <ul class="likeUnlike">
               <li> <!-- birinci usul nece php ile userin like edib etmediyinnen asili olarag
                    buttonun rengin deyishirik -->
                  <button <?php if (isset($_SESSION['user_id'])): {
                                            $user_id = $_SESSION['user_id'];
                                            if (previously_liked($user_id, $termin_id, 'termin_like')): ?>
                                                class="btn btn-success-outline liked"
                                            <?php else: ?>
                                                class="btn btn-success-outline"
                                            <?php endif; ?>
                          <?php }
                                else :?>
                                                class ="btn btn-success-outline"
                          <?php endif;  ?>
                          id="presslike" onclick="userLiked(<?php echo $termin_id ?>,<?php echo $terLike ?>, '<?php echo $userName ?>')">
                      <i class="fa fa-thumbs-o-up fa-lg"></i>
                      <span id="num_like"><?php echo $terLike ?></span>
                  </button>
                </li>

                <li> <!-- ikinci php usulu ile eyni sheyi edirik, amma dislike buttonu ile -->
                  <button class= <?php if (isset($_SESSION['user_id'])) {
                                            $user_id = $_SESSION['user_id'];
                                            if (previously_liked($user_id, $termin_id, 'termin_dislike'))
                                                echo "\"btn btn-danger-outline disliked\"";
                                             else
                                                echo "\"btn btn-danger-outline\"";
                                          }
                                      else
                                        echo "\"btn btn-danger-outline\"";
                         ?>
                      id="pressdislike" onclick="userDisliked(<?php echo $termin_id; ?>,<?php echo $terDislike; ?>)">
                      <i class="fa fa-thumbs-o-down fa-lg"></i>
                      <span id="num_dislike"><?php echo $terDislike ?></span>
                  </button>
                </li>

                <li class="yazar" ><span>Əlavə etdi: <?php echo $userName ?></span></li>
                <li class="menbe"> Mənbə : <?php echo $terSource ?></li>
                <li><button type="button" class="random btn btn-secondary pull-right">Random Termin</button></li>
              </ul>


              </div>
              <?php
                include 'db.php';
                $connection = mysqli_select_db($db_connection,$dbname);
                $sqlTag = "SELECT * FROM fk_tag WHERE termin_id = '$termin_id'";
                $query = mysqli_query($db_connection, $sqlTag);
                $row_cnt = mysqli_num_rows($query);
                if ($row_cnt !== 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $tagID[] =  $row['tag_id'];
                  }
                  foreach ($tagID as $key => $value) {
                    $sql = "SELECT * FROM tag WHERE id = '$value'";
                    $query = mysqli_query($db_connection, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                      $tag[] =  $row['tag'];
                    }
                  }
                  echo "Açar sözlər: ";
                  foreach ($tag as $key => $value) {
                    echo $value." ";
                  }
                }
               ?>
            </div>
            <div class="col-md-12 pull-left sliderTermin">
              <div class="smr">
  <br>
  <div id="myCarousel" class="carousel slide smrSlider" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <div class="word">
          <ul><a href=""><p>Termin1</p></a></ul>
       </div>
      <div class="carousel-caption"></div>
      </div>


      <div class="item">
        <div class="word">
         <ul><a href=""><p>Termin2</p></a></ul>
        </div>
      <div class="carousel-caption"></div>
      </div>

          <div class="item">
       <div class="word">
       <ul><a href=""><p>Termin3</p></a></ul>
       </div>
       <div class="carousel-caption"></div>
      </div>

      <div class="item">
        <div class="word">
         <ul><a href=""><p>Termin4</p></a></ul>
        </div>
        <div class="carousel-caption"></div>
      </div>
      </div>
      <div class="fb-comments" data-href="http://108.179.232.92/~kerimovs/termin/termin.php" data-width="100%" data-numposts="10"></div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
            </div>
          </div>
          <div class="col-md-4 terminRight pull-right">
            <div class="col-md-12 ">
              <?php
                include "rightPanel.php";
              ?>
            </div>
          </div>
        </div>


      </div>
      <div class="container-fluid">
        <div class="row">
          <?php include 'footer.php'; ?>
        </div>
      </div>
<script type="text/javascript">


 function userLiked (terminID, terminLike, terminWriter) {


      console.log("Pressed like ", terminWriter);

      $.ajax({
        url: 'like.php',
        type:'POST',
        data: 'term_id='+terminID+'&act=like'+'&term_writer='+terminWriter,
        success: function(data) {
            console.log(data);
            data =JSON.parse(data);
            // data = $.trim(data);
            console.log("entered function", data.result);
            if (data.result == 'Success') {
                var num_of_likes = parseInt($('#num_like').text())+1;
                $('#num_like').text(num_of_likes);
                $('#presslike').addClass('liked');
                //eger bu true deyerdir, demeli dislike-e evvel basilib ve
                //sayini bir vahid azaltmaq gerekdir
                if (data.attr_changed == "ter_num_dislike") {

                    var num_of_dislike = parseInt($('#num_dislike').text())-1;
                    $('#num_dislike').text(num_of_dislike);
                    $('#pressdislike').removeClass('disliked');
                }
            }
            else
              alert(data.result); //bunu nece normal chixartmag olar
        }
      });
}
function userDisliked (terminID, terminDislike) {


      console.log("Pressed dislike ", terminDislike);

      $.ajax({
        url: 'like.php',
        type:'POST',
        data: 'term_id='+terminID+'&act=dislike',
        success: function(data) {
            console.log(data);
            data =JSON.parse(data);

            console.log("entered function", data.result);

            if (data.result == 'Success') {
                //hazirda dislike sayini mueyyen edib onu artiriram ve menimsedirem
                var num_of_dislikes = parseInt($('#num_dislike').text())+1;
                $('#num_dislike').text(num_of_dislikes);
                //classi deyishirik
                $('#pressdislike').addClass('disliked');
                // $('.btn btn-success-outline').removeClass()
                //eger bu true deyerdir, demeli dislike-e evvel basilib ve
                //sayini bir vahid azaltmaq gerekdir
                if (data.attr_changed == "ter_num_like") {

                    var num_of_likes = parseInt($('#num_like').text())-1;
                    $('#num_like').text(num_of_likes);
                    $('#presslike').removeClass('liked');
                }
            }
            else
              alert(data.result);

        }
      });

}



</script>


  </body>
</html>
