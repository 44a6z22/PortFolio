<?php
	
	session_start();
	
	if (isset($_SESSION['admin_session'])) 
	{
		header('location: dashboard.php');
	}

	include "php/template/head.php";
?>

<body>
	<div class="container" id="login">
		
		<div class="row ">

			<?php

			if (isset($_GET['err'])) {
				$err = $_GET['err'];
				require "php/template/errors.php";
			}

			?>

			<div class="col-md-6 offset-md-3">

				<!-- card -->
				<div class="card">
					<h1>Admin login</h1>

					<form method="post" action="php/actions/login.php">

						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email">
						</div>

						<div class="form-group">
							<input type="password" class="form-control" name="pass" placeholder="Password">
						</div>

						<input type="submit" name="submit" value="login" class="btn btn-primary btn-block">
					</form>

				</div>
				<!-- /card -->

			</div>

		</div>
	</div>

</body>

</html>