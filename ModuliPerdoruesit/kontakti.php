<?php

	include("konfigurimi.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include_once("KokaFaqes.php"); ?>

				<!-- Nav -->
					<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section  class="main">
								<section>
									<h3>Na dërgoni mesazh për më shumë informacione ose pyetje </h3><br>
													<form method="post" action="shtokontakt.php">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="Subjekti" id="demo-name" value="" placeholder="Subjekti" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="email" name="Emaili" id="demo-email" value="" placeholder="Emaili" />
												</div>
												
												
												
												<div class="col-12">
													<textarea name="Mesazhi" id="demo-message" placeholder="Shkruani mesazhin tuaj" rows="6"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="shtokontakt"value=" Dergo" class="primary" /></li>
														
													</ul>
												</div>
											</div>
										</form>
										
										
											</section>
							</section>
						</div>

				<!-- Footer -->
					<?php include_once("FundiFaqes.php"); ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>