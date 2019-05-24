<?php

session_start();

if (isset($_SESSION['admin_session'])) {
	header('location: dashboard.php');
}
include "php/template/head.php";
?>

<body class="bg-dark">

	<div class="container">

		<?php

			if (isset($_GET['error'])) {
				$err = $_GET['error'];
				require "php/template/errors.php";
			}

		?>

		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Login</div>
			<div class="card-body">
				<form method="post" action="php/actions/login.php">
					<div class="form-group">
						<div class="form-label-group">
							<input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
							<label for="inputEmail">Email address</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required="required">
							<label for="inputPassword">Password</label>
						</div>
					</div>

					<input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
				</form>

			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>