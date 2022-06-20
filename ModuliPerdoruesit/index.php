
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfigurimi.php"); ?>
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
								<section><?php 
					$vizitat=1;
					if (isset($_COOKIE["vizitat"])) {
						$vizitat = (int)$_COOKIE["vizitat"];
					} $Muaji = 2592000 + time();

					setcookie("vizitat", date("F jS - g:i a"), $Muaji);
					if(isset($_COOKIE["vizitat"]))
					{
						$efundit = $_COOKIE["vizitat"];
						echo "<p style='text-align:right;'> Vizita juaj e fundit ishte me: " . $efundit. "</p>";
					}
					else
					{
						echo "<p style='text-align:right;'> Vizita juaj e parë në Uebaplikacionin tonë! Ju dëshirojme mirësardhje! </p>";
					}
					?>
													<h3 style="text-align: center;">Banesat për Shitje dhe Qera në dispozicion: </h3>
													
													
													<div class="box alt">
														<div class="row gtr-uniform"><?php
												           		 $rezultati = mysqli_query($lidh_sb_p, "CALL SelektoBanesaPerd()");
												            while ($row = mysqli_fetch_assoc($rezultati)) {

												              extract($row);
															  
															  
												if($rezultati==null)
												  mysqli_free_rezultati($rezultati);

												            ?> 
															
															<div class="col-4"><span class="image fit"><?php echo '<img src="data:images/jpeg;base64,'.base64_encode( $row['FotojaBaneses'] ).'">'; ?><p>Statusi: <?php echo $Statusi;?><br>Madhesia: <?php echo $MadhesiaBaneses;?>m<sup>2</sup><br>Cmimi: <?php echo $CmimiBaneses;?>€<br></p></span>
																</div><?php } ?>
															
														</div>
													</div>
										
										
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