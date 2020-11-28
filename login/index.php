<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
</head>
<body>
	<center>
			<fieldset>
				<legend>
				Registrarse
				</legend>
				<label>
					Name
				</label>
				<input type="email" name="email" required="">
				<br>
				<label>
					Email
				</label>
				<input type="passsord" name="passsord" required="">
				<br>
				<label>
					Password
				</label>
				<input type="passsord" name="passsord" required="">
				<br>
				<button type="submit">
					Access
				</button>
				<input type="hidden" name="action" value= "login" >
				<input type="hidden" name="token" value= "<?= $_SESSION['token'] ?>" >
				
				
			</fieldset>
		</center>

	<center>
			
		<fieldset>
			<legend>
				Access in your account
			</legend>
			<label>
				Email
			</label>
			<input type="email" name="email" required="">
			<br>
			<label>
				Password
			</label>
			<input type="passsord" name="passsord" required="">
			<br>
			<button type="submit">
				Access
			</button>
		</fieldset>
	</center>
</body>
</html>