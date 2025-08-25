<?php
session_start();
include('includes/config.php');
if (isset($_POST['login'])) {
	$email = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
	$query = $dbh->prepare($sql);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':password', $password, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if ($query->rowCount() > 0) {
		$_SESSION['alogin'] = $_POST['username'];
		echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
	} else {

		echo "<script>alert('Invalid Details');</script>";
	}
}

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vehicles Rental Portal | Admin Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		body {
			font-family: 'Roboto', sans-serif;
			background: #447397;
			color: #fff;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.login-container {
			background: rgba(255, 255, 255, 0.1);
			padding: 40px;
			border-radius: 10px;
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 400px;
		}

		.login-container h1 {
			text-align: center;
			margin-bottom: 20px;
			color: #111111;
		}

		.form-control {
			border-radius: 20px;
			background: rgba(255, 255, 255, 0.2);
			border: none;
			color: #101010;
			font-size: 15px;
		}

		.form-control::placeholder {
			color: #333;
			opacity: 0.8;
		}

		.form-control {
			color: #333;
		}

		.btn-primary {
			border-radius: 30px;
			background: #111111;
			border: none;
			font-size: 18px;
		}

		.btn-primary:hover {
			background: #101010;
		}

		.text-center a {
			color: #fff;
			text-decoration: underline;
		}

		.text-center a:hover {
			text-decoration: #101010;
			display: block;
		}
	</style>
</head>

<body>
	<div class="login-container">
		<h1>Admin | Sign in</h1>
		<form method="post">
			<div class="form-group">
				<div class="form-group1">
					<label for="username" class="text-uppercase" style="color: #111111;">Your User name</label>
				</div>
				<input type="text" id="username" placeholder="Username" style="background-color: #fff;" name="username" title="enter your username" class="form-control mb" required>
			</div>
			<div class="form-group">
				<label for="password" class="text-uppercase" style="color: #111111;">Password</label>
				<input type="password" id="password" placeholder="Password" style="background-color: #fff;" name="password" title="enter your password " class="form-control mb" required>
			</div>
			<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
		</form>
		<p class="text-center" style="margin-top: 20px;"><a href="../index.php" style="color: #101010;">Back to Home</a></p>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>