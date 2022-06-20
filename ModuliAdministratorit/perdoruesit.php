<?php

	include("kontrollo.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
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
							

						<!-- First Section -->
							<section id="first" class="main special">
								<p style="text-align:right;">Përshëndetje, <em><?php  echo $kyc_perd;?>!</em></p>
								<header class="major">
									<h2>Moduli per Menaxhimin e te dhenave te Përdoruesve</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon major style3 fa-copy" ></span>
										<a href="shto_perdorues.php"><h3>Shto Përdorues</h3></a>
											<p>Forma per shtimin e perdoruesve te rinje ne uebaplikacion me te drejta te administratorit.</p>
										
									</li>
									<li>
										<span class="icon major style3 fa-copy" ></span>
										<a href="modifiko_perdorues.php"><h3>Modifiko Përdorues</h3></a>
											<p>Forma per modifikim te te dhenave te perdoruesve aktual ne uebaplikacion me te drejta te administratorit</p>
										
									</li>
									<li>
										<span class="icon major style3 fa-copy" ></span>
										<a href="fshij_perdorues.php"><h3>Fshije Përdorues</h3></a>
											<p>Forma per fshirje te perdoruesve aktual nga uebaplikacion</p>
										
									</li>
								</ul>
							</section>

						<!-- Second Section -->
							

					</div>

				<!-- Footer -->
					<?php include("FundiFaqes.php"); ?>

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