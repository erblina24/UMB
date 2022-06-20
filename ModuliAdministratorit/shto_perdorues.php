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
							<section  class="main">
								<div class="spotlight">
									<div class="content">
										<p style="text-align:right;">Përshëndetje, <em><?php  echo $kyc_perd;?>!</em></p>
										<h3>SHTO TË DHËNAT E PËRDORUESIT</h3> 
									<div class="table-wrapper">
										<form enctype="multipart/form-data" method="post" action="shtoperdorues.php">
											<table>
												<tbody>
													<tr> 
														<td>Emri Perdoruesit</td>
														<td><input type="text" name="Emri_Perdoruesit"></td>
													</tr>
													<tr> 
														<td>Fjalëkalimi</td>
														<td><input type="text" name="Fjalekalimi"></td>
													</tr>
													<tr> 
														<td>Emaili</td>
														<td><input type="text" name="Emaili"></td>
													</tr>
													<tr> 
														
														<td><input type="submit" name="shtoperdorues" class="button primary small" value="Shto"></td>
													</tr>
												</tbody>
											</table>
										</form>
									</div>
								</div>
							</div>
									
							</section>
						</div>
						<?php include_once("FundiFaqes.php"); ?>
					</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		</body>
</html>