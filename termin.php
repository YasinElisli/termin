<?php ob_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Termin</title>
    <?php include 'link.php'; ?>
    <?php include 'script.php'; ?>
  </head>
  <body>
    <?php include 'searchWords.php';
          include 'header.php';
          include 'core.php'; ?>
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
                <li class="mm ">Daxil edilib: <?php echo $publ_date ?></li>
                <li class="term">Kategoriya: <?php echo $kategoriya ?></li>
              </ul>
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
                <li>
                  <button class="btn btn-success" id="presslike" onclick="userLiked(<?php echo $termin_id ?>,<?php echo $termin_like ?>,<?php echo $like ?>)">
                      <i class="fa fa-thumbs-o-up fa-lg"></i><span id="num_like"><?php echo $termin_like ?></span>
                  </button>
                </li>
                <li>
                  <a class="btn btn-danger" href="#" >
                  <i class="fa fa-thumbs-o-down fa-lg"></i> 11</a>
                </li>
                <li class="yazar" >Əlavə etdi: <?php echo $user_name ?></li>
                <li class="menbe"> Mənbə : Yazar</li>
                <li class="random"><button type="button" class="btn btn-secondary">Random Termin</button></li>
                </li>
              </ul>
              </div>
            </div>
            <div class="col-md-12 pull-left sliderTermin"></div>
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



<!-- evvelki kodlar  -->
<!-- <div class="row pull-left">
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
  <li>
    <button class="btn btn-success" id="presslike" onclick="userLiked(<?php echo $termin_id ?>,<?php echo $termin_like ?>,<?php echo $like ?>)">
        <i class="fa fa-thumbs-o-up fa-lg"></i><span id="num_like"><?php echo $termin_like ?></span>
    </button>
  </li>
  <li>
    <a class="btn btn-danger" href="#" >
    <i class="fa fa-thumbs-o-down fa-lg"></i> 11</a>
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
  include "rightPanel.php";
?>
</div>
</div> -->
<!-- evvelki kodlar  -->


<script type="text/javascript">
// var like="a";
 function userLiked (terminID, terminLike, act) {


      console.log("Pressed like ", act);

      $.ajax({
        url: 'like.php',
        type:'POST',
        data: 'term_id='+terminID+'&act='+act,
        success: function(data) {
            console.log(data);
            data = $.trim(data);
            console.log("entered function", data+"azik");
            console.log("azik");
            if (data == 'Success') {

                $('#num_like').html(++terminLike);
                console.log(data);
            }
            else
              alert(data);
        }
      });
}

function handle(data) {

}
</script>


  </body>
</html>
