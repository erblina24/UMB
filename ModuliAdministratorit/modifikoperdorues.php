<?php

	include("kontrollo.php");	
?>

<?php

include_once("konfigurimi.php");

if(isset($_POST['modifikoperdorues']))
{	
	$ID_Perdoruesi=$_POST['ID_Perdoruesi'];
	$Emri_Perdoruesit=$_POST['Emri_Perdoruesit'];
	$Fjalekalimi=$_POST['Fjalekalimi'];
	$Emaili=$_POST['Emaili'];	
	
	
	if(empty($Emri_Perdoruesit) || empty($Fjalekalimi) || empty($Emaili)) {	
			
		if(empty($Emri_Perdoruesit)) {
			echo "<font color='red'>Fusha Emri Perdoruesit eshte e zbrazet..</font><br/>";
		}
		
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fusha Fjalekalimi  eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Emaili)) {
			echo "<font color='red'>Fusha Emaili eshte e zbrazet.</font><br/>";
		}
		
				
	} else {	
		
		$rezultati = mysqli_query($lidh_mp,"CALL ModifikoPerdorues('$Emri_Perdoruesit','$Fjalekalimi','$Emaili')");
		
		header("Location:modifiko_perdorues.php");
	}
}
?>
<?php

$ID_Perdoruesi=$_GET['ID_Perdoruesi'];
 
$rezultati = mysqli_query($lidh_selektPerd,"CALL SelektoPerdoruesitId('$ID_Perdoruesi')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri_Perdoruesit = $rez['Emri_Perdoruesit'];
	$Fjalekalimi = $rez['Fjalekalimi'];
	$Emaili = $rez['Emaili'];
	
}
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
										
									<div class="table-wrapper">
										<form enctype="multipart/form-data" method="post" action="modifiko_perdorues.php">
											<table>
												<tbody>
													
													<tr>
														<td>Emri Perdoruesit</td>
														<td><input type="text" name="Emri_Perdoruesit" value='<?php echo $Emri_Perdoruesit;?>' required /></td>
													</tr>
													<tr>
														<td>Fjalekalimi</td>
														<td><input type="text" name="Fjalekalimi" value='<?php echo $Fjalekalimi;?>' required /></td>
													</tr>
												
												
														<tr>
														<td>Emaili</td>
														<td><input type="text" name="Emaili" value='<?php echo $Emaili;?>'  required /></td>
													</tr>
													<tr>
														<input type="hidden" name="ID_Perdoruesi "  value='<?php echo $_GET['ID_Perdoruesi'];?>' class="button primary small" />
														<td><input type="submit" name="modifikoperdorues" value="Modifiko" class="button primary small" ></td>
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