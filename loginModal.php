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
					    		<span id="login_fail" class="response_error" style="display: none;">Login failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form class="loginForm" role="form" action="login.php" method="post">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" name="username" class="form-control" id="login_username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" id="email-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-lock"></i></div>
								      		<input type="password" name="password" class="form-control" id="password" placeholder="Parol">
								    	</div>
								    	<span class="help-block has-error" id="password-error"></span>
								  	</div>
						  			<input type="submit" value="Giriş"name="submit" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In....">
						  			<div class="clearfix"></div>
						  			<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												<a href="javascript:;" class="forgetpass-tab"> Şifrəmi unutmuşam </a>

											</div>

											<div class="col-xs-4 col-sm-4 col-md-4">
												<i class="fa fa-check"></i>
												<a href="javascript:;" class="signup-tab"> Qeydiyyat </a>
											</div>
										</div>
						  			</div>
								</form>
					    	</div>
					    	<div role="tabpanel" class="tab-pane" id="profile">
					    	    &nbsp;&nbsp;
					    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
					    		<div class="clearfix"></div>
					    		<form role="form" action="index.php" method="post">
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" name="username" class="form-control" id="username" placeholder="Username">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="username-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-key"></i></div>
								      		<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Parol">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-key"></i></div>
								      		<input type="password" name="password_retyped" class="form-control" id="retypePassword" placeholder="Parolun təkrarı">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-at"></i></div>
								      		<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><i class="fa fa-user"></i></div>
								      		<input type="text" name="name" class="form-control" id="inputNameSurname" placeholder="Adınız">
								    	</div>
								    	<span class="help-block has-error" data-error='0' id="remail-error"></span>
								  	</div>
										<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon"><i class="fa fa-user"></i></div>
													<input type="text" name="surname" class="form-control" id="inputNameSurname" placeholder="Soyadınız">
											</div>
											<span class="help-block has-error" data-error='0' id="remail-error"></span>
										</div>
										<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon"><i class="fa fa-birthday-cake"></i></div>
													<input type="date" name="bdate" class="form-control" id="inputNameSurname" placeholder="Doğum tarixi">
											</div>
											<span class="help-block has-error" data-error='0' id="remail-error"></span>
										</div>
						  			<input type="submit" name="submit" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering...." value="Qeydiyyatdan keç">
									<div class="clearfix"></div>
									<div class="login-modal-footer">
						  				<div class="row">
											<div class="col-xs-8 col-sm-8 col-md-8">
												<i class="fa fa-lock"></i>
												<a href="javascript:;" class="forgetpass-tab"> Şifrəmi unutmuşam </a>

											</div>

											<div class="col-xs-4 col-sm-4 col-md-4">
												<i class="fa fa-check"></i>
												<a href="javascript:;" class="signin-tab"> Giriş </a>
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

							  			<button type="button" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait....">Parolu göndər</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="signin-tab"> Giriş </a>

												</div>

												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Qeydiyyat </a>
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
