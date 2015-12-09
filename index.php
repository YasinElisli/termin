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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<div class="container-fluid">
    <div class="row">
    	<?php include 'header.php'; ?>
    </div>
		<div class="row">
			<div class="main">

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

			</div>



		</div>
	</div>

	<script src="js/search.js" type="text/javascript">


	</script>
</body>
</html>
