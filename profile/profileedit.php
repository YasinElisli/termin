<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="prf-edt">
				<div>
					<label><p class="prf-edt-paragr">Username</p>
						<input value="<?php echo $_SESSION['username']; ?>" class="form-control" type="text" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Adınız</p>
						<input value="<?php echo $_SESSION['firstname']; ?>" class="form-control" type="text" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Soyadınız</p>
						<input value="<?php echo $_SESSION['lastname']; ?>" class="form-control" type="text" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">E-mail</p>
						<input value="<?php echo " ".$_SESSION['email']; ?>" class="form-control" style="padding:0px;" type="mail" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Köhnə parol</p>
						<input value="<?php echo $_SESSION['pass']; ?>" class="form-control" type="password" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Yeni Parol</p>
						<input class="form-control" type="password" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Yeni Parol Təkrarı</p>
						<input class="form-control" type="password" name"">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Birthday</p>
						<input value="<?php echo $_SESSION['birthdate']; ?>" class="form-control dateinput" type="date" name"">
					</label>
				</div>
				<div>
					<Strong><p class="prf-edt-paragr">Gender</p></Strong>
					<div class="dispinblock">
					<label><input type="radio" class="radioinput" name="gender" value="male" <?php if ($_SESSION['gender'] == 'k') {
						echo "checked";
					} ?>>Male</label>
					<label><input type="radio" class="radioinput" name="gender" value="female" <?php if ($_SESSION['gender'] == 'q') {
						echo "checked";
					} ?>>Female</label>
					</div>
				</div>
				<div class="submit ">
					<input class="btn submitinput dateinput" type="submit" value="Submit profile" name"">
				</div>
	</div>
</div>
