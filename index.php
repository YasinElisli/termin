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
	<!-- Login Modal  -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content login-modal">
      		<div class="modal-header login-modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-center" id="loginModalLabel">HESABINIZA DAXİL OLUN</h4>
      		</div>
      		<div class="modal-body">
      			<div class="text-center">
	      			<div role="tabpanel" class="login-tab">
					  	<!-- Nav tabs -->
					  	<ul class="nav nav-tabs" role="tablist">
					    	<li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Daxil ol</a></li>
					    	<li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Qeydiyyat</a></li>
					    	<li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Şifrəni unutmuşam</a></li>
					  	</ul>

					  	<!-- Tab panes -->
					 	<div class="tab-content">
					    	<div role="tabpanel" class="tab-pane active text-center" id="home">
					    		&nbsp;&nbsp;
					    		<span id="login_fail" class="response_error" style="display: none;">Loggin failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form class="loginForm">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" id="login_username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" id="email-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" class="form-control" id="password" placeholder="Password">
								    	</div>
								    	<span class="help-block has-error" id="password-error"></span>
								  	</div>
						  			<button type="button" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In....">Daxil ol</button>
						  			<div class="clearfix"></div>
						  			<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>

											</div>

											<div class="col-xs-4 col-sm-4 col-md-4">
												<i class="fa fa-check"></i>
												<a href="javascript:;" class="signup-tab"> Sign Up </a>
											</div>
										</div>
						  			</div>
								</form>
					    	</div>
					    	<div role="tabpanel" class="tab-pane" id="profile">
					    	    &nbsp;&nbsp;
					    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form>
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" class="form-control" id="username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="username-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail" placeholder="Email">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail" placeholder="Password">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail" placeholder="Retype password">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="text" class="form-control" id="remail" placeholder="Name">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
						  			<button type="button" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering....">Register</button>
									<div class="clearfix"></div>
									<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>

											</div>

											<div class="col-xs-4 col-sm-4 col-md-4">
												<i class="fa fa-check"></i>
												<a href="javascript:;" class="signin-tab"> Sign In </a>
											</div>
										</div>
						  			</div>
								</form>
					    	</div>
					    	<div role="tabpanel" class="tab-pane text-center" id="forget_password">
					    		&nbsp;&nbsp;
					    	    <span id="reset_fail" class="response_error" style="display: none;"></span>
						    		<div class="clearfix"></div>
						    		<form>
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
									      		<input type="text" class="form-control" id="femail" placeholder="Email">
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="femail-error"></span>
									  	</div>

							  			<button type="button" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait....">Forget Password</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>

												</div>

												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>
												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						  	</div>
						</div>

	      			</div>
	      		</div>

	    	</div>
	   </div>
 	</div>
 	<!-- - Login Model Ends Here -->




<div class="container"><?php include 'middle.php';  ?></div>
<?php include 'footer.php'; ?>
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
