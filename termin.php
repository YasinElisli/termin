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
    <?php include 'searchWords.php';
          include 'header.php';
          include 'core.php'; ?>
      <div class="container terminMain">
        <div class="row">
          <div class="col-lg-12 padreset">
            <div class="topBanner"><center>1024 X 100 </center></div>
          </div>
        </div>
        <div class="row pull-left">
          <div class="col-lg-12 padreset">
            <div class="container-fluid">
          <div class="month row">
            <div class="mm">Daxil edilib: <?php echo $publ_date ?></div>
 <div class="term">Kategoriya: <?php echo $kategoriya ?></div>
   <ul class="sosial pull-right">
      <li><a href="#"><i class="fa fa-star  fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
      <li><a href="#"><i class="fa fa-share-alt fa-lg"></i></a></li>
   </ul>
        <div class="demo"><?php echo "<h3 class=\"terName\">".$termin."</h3>" ?></div>
        <div class="izah"><?php echo $termin_desc ?></div>
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
                    id="presslike" onclick="userLiked(<?php echo $termin_id ?>,<?php echo $termin_like ?>)">
                <i class="fa fa-thumbs-o-up fa-lg"></i>
                <span id="num_like"><?php echo $termin_like ?></span>
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
                id="pressdislike" onclick="userDisliked(<?php echo $termin_id ?>,<?php echo $termin_dislike ?>)">
                <i class="fa fa-thumbs-o-down fa-lg"></i>
                <span id="num_dislike"><?php echo $termin_dislike ?></span>
            </button>
          </li>

        </ul>

      </div>
      <div class="yazar" >Əlavə etdi: <?php echo $user_name ?></div>
      <div class="random"><button type="button" class="btn btn-secondary">Random Termin</button></div>

      </div>

        </div>
      </div>
        </div>
          <div class="row pull-right">
            <div class="col-lg-12 padreset">
        <?php 
          // <div id="statistic" class="container-fluid">
          include "rightPanel.php"; 
        ?>
      </div>
  </div>
</div>





</div>

<script type="text/javascript">

 function userLiked (terminID, terminLike) {
  
      
      console.log("Pressed like ", terminLike);
      // var act;
      // //yoxluyurug eger likedan evvel dislike
      // if (user pressed dislike before)
      //     act = "dislikeOffAndLike";
      //   else 
      //     act = "like";

      $.ajax({
        url: 'like.php',
        type:'POST',
        data: 'term_id='+terminID+'&act=like',
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
