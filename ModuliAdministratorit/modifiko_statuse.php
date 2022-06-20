<?php

	include("kontrollo.php");	
?>

<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_statuse']))
{	
	$ID_Statusi=$_POST['ID_Statusi'];
	$Statusi=$_POST['Statusi'];
	
	
	if(empty($Statusi)) {	
			
		if(empty($Statusi)) {
			echo "<font color='red'>Fusha Statusi eshte e zbrazet..</font><br/>";
		}	
				
	} else {	
		
		mysqli_query($lidh_ms1,"SET @id = ${ID_Statusi}");
		mysqli_query($lidh_ms1,"SET @statusi = '${Statusi}'");
		$rezultati=mysqli_query($lidh_ms1,"CALL ModifikoStatus(@statusi,@id)");
		if($rezultati){
			header("Location: menaxho_statuse.php");
		}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
	}
}
?>
<?php

$ID_Statusi=$_GET['ID_Statusi'];
 
$rezultati = mysqli_query($lidh_ss,"CALL SelektoStatusId('$ID_Statusi')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Statusi = $rez['Statusi'];
	
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
										<div class="row gtr-uniform">
										<form enctype="multipart/form-data" method="post" action="modifiko_statuse.php">
											<h3>Menaxho te dhenat e Statusit</h3>

											Statusi
				<input type="text" name="Statusi" value='<?php echo $Statusi;?>'   required />
				<br>
		
				<input type="hidden" name="ID_Statusi" value='<?php echo $_GET['ID_Statusi'];?>' />
				<input type="submit" class="button primary" name="modifiko_statuse" value="Modifiko">
		
										</form>
									</div>
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