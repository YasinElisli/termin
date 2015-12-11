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
		<div class="row" id="search">
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
						      <input type="text"  name="search" class="form-control searchInp" placeholder="Search for..." aria-describedby="sizing-addon2" autocomplete="off" onkeyup="searchq()">
						      <span class="input-group-btn input-group-addon" id="sizing-addon2">
						        <button class="btn btn-default" type="button">
						        	<span class="glyphicon glyphicon-search"></span>
						        </button>
						      </span>
						    </div> 
					</form>
				</div>
				<div id="output" style="display:none"></div>
			</div>
			
		</div>
		<div class="row" id="#panels">
			<div class="col-lg-3 popular">
				<div class="forborder">
					<h3> Ən çox oxunan</h3>
					<ul class="termins">
						<li class="article">
							<h4>
								<a href="#">Kompyuter şəbəkəsi</a>
							</h4>
							<span class="date">
								03 Dek 2015 
								<a href="#"> IT </a>
							</span>
						</li>
						<li class="article">
							<h4>
								<a href="#">Kompyuter elmləri</a>
							</h4>
							<span class="date">
								03 Dek 2015 
								<a href="#"> IT </a>
							</span>
						</li>
						<li class="article">
							<h4>
								<a href="#">Nanotexnologiya</a>
							</h4>
							<span class="date">
								03 Dek 2015 
								<a href="#"> IT </a>
							</span>
						</li>
						<li class="article">
							<h4>
								<a href="#">İnformasiya sitemləri</a>
							</h4>
							<span class="date">
								03 Dek 2015 
								<a href="#"> IT </a>
							</span>
						</li>

					</ul>
				</div>
			</div>
			<div class="col-lg-3 popular">
				<div class="forborder">
					<h3> Ən sonuncu</h3>
					<ul class="termins">
							<li class="article">
								<h4>
									<a href="#">Kompyuter şəbəkəsi</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>
							<li class="article">
								<h4>
									<a href="#">Kompyuter elmləri</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>
							<li class="article">
								<h4>
									<a href="#">Nanotexnologiya</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>
							<li class="article">
								<h4>
									<a href="#">İnformasiya sitemləri</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>

					</ul>
				</div>
			</div>
			<div class="col-lg-3 popular">
				<div class="forborder">
					<h3> Populyar yazarlar</h3>
					<ul class="termins">
							<li class="article">
								<h4>
									<a href="#">Kompyuter şəbəkəsi</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>
							<li class="article">
								<h4>
									<a href="#">Kompyuter elmləri</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>
							<li class="article">
								<h4>
									<a href="#">Nanotexnologiya</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>
							<li class="article">
								<h4>
									<a href="#">İnformasiya sitemləri</a>
								</h4>
								<span class="date">
									03 Dek 2015 
									<a href="#"> IT </a>
								</span>
							</li>

						</ul>
					</div>
			</div>
			<div class="col-lg-3 popular">
				<div class="forborder">
					<h3> Taglar</h3>
					<a href="#" class="tags"> Java </a>
					<span class="item-multiplier-x">×</span>
					<span class="item-multiplier-count">asjhdjshd</span>
					 
				</div>
			</div>
		</div>
	</div>


</body>
</html>
