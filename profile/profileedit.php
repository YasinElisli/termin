<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="prf-edt">
		<form action="profile/profileChange.php" method="post">
			  <?php $queryEdit =  userData();
				while ($row = mysqli_fetch_assoc($queryEdit)) {
  				$dbusername = $row['username'];
  				$dbpassword = $row['password'];
  				$dbregdate = $row['reg_date'];
  				$dbuserID = $row['id'];
  				$dbFirst = $row['firstname'];
  				$dbLast = $row['lastname'];
  				$dbMail = $row['email'];
  				$dbBirth = $row['birthdate'];
  				$dbGender = $row['gender'];
					$dbPPhoto = $row['user_photo'];
  			}

				?>
				<div>
					<label><p class="prf-edt-paragr">Username</p>
						<input value="<?php echo $dbusername; ?>" class="form-control" type="text" name="usernameEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Adınız</p>
						<input value="<?php echo $dbFirst; ?>" class="form-control" type="text" name="nameEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Soyadınız</p>
						<input value="<?php echo $dbLast; ?>" class="form-control" type="text" name="surnameEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">E-mail</p>
						<input value="<?php echo $dbMail; ?>" class="form-control" type="mail" name="emailEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Köhnə parol</p>
						<input value="<?php echo $dbpassword;?>" class="form-control" type="password" name="lastPassEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Yeni Parol</p>
						<input class="form-control" type="password" name="newPassEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Yeni Parol Təkrarı</p>
						<input class="form-control" type="password" name="rePassEdit">
					</label>
				</div>
				<div>
					<label><p class="prf-edt-paragr">Birthday</p>
						<input value="<?php echo $dbBirth; ?>" class="form-control dateinput" type="date" name="birthEdit">
					</label>
				</div>
				<div>
					<Strong><p class="prf-edt-paragr">Gender</p></Strong>
					<div class="dispinblock">
					<label><input type="radio" class="radioinput" name="genderEdit" value="k" <?php if ($dbGender == 'k') {
						echo "checked";
					} ?>>Male</label>
					<label><input type="radio" class="radioinput" name="genderEdit" value="q" <?php if ($dbGender == 'q') {
						echo "checked";
					} ?>>Female</label>
					</div>
				</div>
				<div class="submit ">
					<input class="btn submitinput dateinput" type="submit" value="Profili Dəyişin" name="submit">
				</div>
			</form>
	</div>

</div>
