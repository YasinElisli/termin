<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
	<?php include 'link.php';
		  include 'core.php';
	 ?>
</head>
<body>
	<?php include 'script.php'; ?>
	<div class="container-fluid">
    <div class="row">
    	<?php include 'header.php'; ?>
    </div>
		<div class="row parallax-window" data-parallax="scroll" data-image-src="img/sb8.png" id="search" >
			<!-- <div class="main">
				<div class = "col-lg-6  col-lg-offset-3 input-group stylish-input-group">

					<input type="text" name="search" class="form-control" placeholder="Search" autocomplete="off" onkeyup="searchq()">
					<span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
				</div>

				<div id="output" class ="col-lg-6  col-lg-offset-3"
				 style="display:none;">
				</div>
			</div> -->
			<div class="col-lg-6 col-lg-offset-3">
				<div class="searchGroup">
					<form action="termin.php" method="post">
							<!-- <input type="text" name="search" class="form-control searchInp" placeholder="Search" autocomplete="off" onkeyup="searchq()"> -->
						  <!-- <span class="input-group-addon" id="basic-addon2">search</span> -->


						<div class="input-group">
						      <input required type="text"  name="search" class="form-control searchInp" placeholder="Termin Axtarın..." aria-describedby="sizing-addon2" autocomplete="off" onkeyup="searchq()" autofocus>
						      <span class="input-group-btn input-group-addon" id="sizing-addon2">
						        <button class="btn btn-default" type="submit">
						        	<span class="glyphicon glyphicon-search"></span>
						        </button>
						      </span>
						</div>
					</form>
				</div>
				<div id="output" style="display:none"></div>
			</div>
			<!-- Search div end here -->
		</div>

	</div>

<div class="container"><?php include 'middle.php';  ?></div>
<?php include 'footer.php'; ?>
<?php include 'validation.php'; ?>
<script type="text/javascript">
	$("#signupli").click(function() {
		console.log("changing class");
		$(".login-tab ul li:first-child").removeClass("active");
		$(".login-tab ul li:nth-child(2)").addClass("active");

	});
	$(".close").click(function() {
		console.log("changing class");
		$(".login-tab ul li:first-child").addClass("active");
		$(".login-tab ul li:nth-child(2)").removeClass("active");

	});
</script>
</body>
</html>
