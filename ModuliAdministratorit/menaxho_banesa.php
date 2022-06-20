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
										<h3>SHTO TE DHENAT E BANESES</h3>
									<div class="table-wrapper">
										<form enctype="multipart/form-data" action="shto_banesa.php" method="post">
											<table>
												<tbody>
													<tr>
												<select name="ID_Statusi">
													<option selected="selected">Zgjedh Statusin</option>
														<?php
														$rez=mysqli_query($lidh_shb,"CALL SelektoStatus()");
														while($rresht=$rez->fetch_array())
														{
															?>
													<option value="<?php echo $rresht['ID_Statusi']; ?>"><?php echo $rresht['Statusi']; ?></option>
															<?php
														}
														?>
												</select><br />
												</tr>
													<tr>
														<td>Kati</td>
														<td><input type="text" name="Kati"></td>
													</tr>
													<tr>
														<td>Madhesia ne m<sup>2</sup></td>
														<td><input type="text" name="MadhesiaBaneses"></td>
													</tr>
													<tr>
														<td>Fotoja Baneses: <input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
													</tr>
													<tr>
														<td>Cmimi Baneses ne €</td>
														<td><input type="text" name="CmimiBaneses"></td>
													</tr>
													<tr>
														<td><input type="submit" name="shtobanes" value="Shto" class="button primary small"></td>
													</tr>
												</tbody>
											</table>
										</form>
									</div>
									<h3>KËRKO TË DHËNAT E BANESES PËR MENAXHIM</h3>
										<div class="table-wrapper">
										<form method="post" action="">
											<table>
												<tbody>
													<tr>
														<td>
														Shkruaj:
														</td>
														<td>
															<input type="text" name="term" placeholder="Kati ose Statusi" value="%"/>
														</td>
														<td> <input type="submit" value="Kërko" class="button primary small" />
														</td>
													</tr>
													</table>
													<table>
													<tr>
														<td>Kati</td>
														<td>Madhesia</td>
														<td>Statusi</td>
														<td>Fotoja Baneses</td>
														<td>Emri Dosjes</td>
														<td>Cmimi Baneses</td>
														<td>Modifiko</td>
														<td>Fshije</td>
											
													</tr>
													<?php
										if (!empty($_REQUEST['term'])) {

											$term = mysqli_real_escape_string($lidh_t,$_REQUEST['term']);     

											$sql = mysqli_query($lidh_s,"CALL SelektoTermBanesat('$term')"); 	
											
										

											while($rresht = mysqli_fetch_array($sql)) { 		
													echo "<tr>";
													echo "<td>".$rresht['Kati']."</td>";
													echo "<td>".$rresht['MadhesiaBaneses']."m<sup>2</sup>"."</td>";
													echo "<td>".$rresht['Statusi']."</td>";
													echo "<td><img src=data:image/jpeg;base64,".base64_encode($rresht['FotojaBaneses'])." width='80'  height='100'/></td>";
													echo "<td>".$rresht['EmriFotosBaneses']."</td>";
													echo "<td>".$rresht['CmimiBaneses']."€"."</td>";
												 
													echo "<td><a href=\"modifiko_banesa.php?ID_Banesa=$rresht[ID_Banesa]\" class='button primary small'>Modifiko</a> </td>";	
													echo "<td><a href=\"fshij_banesa.php?ID_Banesa=$rresht[ID_Banesa]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\"  class='button primary small'>Fshijë</a> </td>";
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