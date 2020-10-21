<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">

				<h2>Login Here</h2>

				<form action="validation.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required placeholder="Username">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required placeholder="Password">
					</div>

					<button type="submit" class="btn btn-primary">Login</button>


				</form>
			</div>


			<div class="col-md-6 login-right">

				<h2>Register Here</h2>

				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control" required placeholder="Username">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required placeholder="Password">
					</div>

					<button type="submit" class="btn btn-primary">Register</button>


				</form>
			</div>


		</div>
		</div>
	</div>

</body>
</html>