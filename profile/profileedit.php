<!DOCTYPE html>
<html>
<head>
	<title>Profile Edit</title>
	<style type="text/css">
	.prf-edt input{
		width: 300px;
		display: inline-block;
	}
	.prf-edt{
	padding: 15px;
	margin-left: 2%;
	min-width: 500px;
	max-width: 500px;
}
	.dispinblock{
		display: inline-block;
	}
	.prf-edt-paragr{
		display: inline-block;
		width: 120px;
	}
	.dateinput{
		width: 210px !important;
	}
	.radioinput{
		width: 40px !important;
	}
	.submit{
		text-align: center;
		width: 100%;
		padding-top: 30px;
	}
	.submitinput{
		margin-right: 20px;
	}
	</style>
</head>
<body>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="prf-edt">
				<div>
					<label><p class="prf-edt-paragr">Username</p><input class="form-control" type="text" name""></label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Firstname</p><input class="form-control" type="text" name""></label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Lastname</p><input class="form-control" type="text" name""></label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">E-mail</p><input class="form-control" style="padding:0px;" type="mail" name""></label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Password</p><input class="form-control" type="password" name""></label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Re-Password</p><input class="form-control" type="password" name""></label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Birthday</p><input class="form-control dateinput" type="date" name""></label>
				</div>
				<div>
					<Strong><p class="prf-edt-paragr">Gender</p></Strong>
					<div class="dispinblock">
					<label><input type="radio" class="radioinput" name="gender" value="male" checked>Male</label>
					<label><input type="radio" class="radioinput" name="gender" value="female">Female</label>
					</div>
				</div>
				<div class="submit ">
					<input class="btn submitinput dateinput" type="submit" value="Submit profile" name"">
				</div>
	</div>
</div>
</body>
</html>