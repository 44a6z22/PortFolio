	<?php
	require "php/template/head.php";
	?>

	<body>

		<?php
		if (!isset($_SESSION['lang'])) {
			$_SESSION['lang'] = "en";
			require "php/template/language.php";
		}

		require "php/template/contact.php";

		require "php/template/firstPAge.php";

		require "php/template/secondPage.php";

		require "php/template/buttons.php";

		require "php/template/footer.php";


		?>


	</body>

	</html>