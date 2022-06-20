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
										<h3>SHTO TE DHENAT E STATUSIT</h3>
									<div class="table-wrapper">
										<form enctype="multipart/form-data" action="shto_statuse.php" method="post">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-medium">
													<input type="text" name="Statusi"/>
												</div>
												<div class="col-6 col-12-medium">
													<input type="submit" value="Shto"name="shtostatus" class="button primary" />
												</div>
											</div>
										</form>
									</div>
									<h3>KËRKO TË DHËNAT E STATUSIT PËR MENAXHIM</h3>
										<div class="table-wrapper">
										<form method="post" action="">
											<table>
												<tbody>
													<tr>
														<td>
														Shkruaj:
														</td>
														<td>
															<input type="text" name="term"  value="%"/>
														</td>
														<td> <input type="submit" value="Kërko" class="button primary small" />
														</td>
													</tr>
													</table>
													<table>
													<tr>
														<td>Statusi</td>
														<td>Modifiko</td>
														<td>Fshije</td>
											
													</tr>
													<?php
										if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($lidh_mb,$_REQUEST['term']);     

											$sql = mysqli_query($lidh_mb,"CALL SelektoTermStatus('$term')");	
											
										

											while($rresht = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$rresht['Statusi']."</td>";
													echo "<td><a href=\"modifiko_statuse.php?ID_Statusi=$rresht[ID_Statusi]\" class='button primary small'>Modifiko</a> </td>";	
													echo "<td><a href=\"fshij_statuse.php?ID_Statusi=$rresht[ID_Statusi]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\"  class='button primary small'>Fshijë</a> </td>";
											}

											}

											?>
													
												</tbody>
											</table>
										</form>
									</div>
										
									</div>
								</div>
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