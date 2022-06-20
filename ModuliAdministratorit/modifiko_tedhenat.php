<?php

	include("kontrollo.php");	
?>

<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_tedhenat']))
{	
	$ID_TeDhenat=$_POST['ID_TeDhenat'];
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$PamjaFaqes=$_POST['PamjaFaqes'];	
	$Dosja=$_POST['Dosja'];
	
	
	if(empty($Titulli) || empty($Pershkrimi) || empty($PamjaFaqes)) {	
			
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha Titulli eshte e zbrazet..</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha Pershkrimi Baneses eshte e zbrazet.</font><br/>";
		}
		
		if(empty($PamjaFaqes)) {
			echo "<font color='red'>Fusha PamjaFaqes eshte e zbrazet.</font><br/>";
		}
		
				
	}  else {	
		
		mysqli_query($lidh_mdh,"SET @id_tdh = ${ID_TeDhenat}");
		mysqli_query($lidh_mdh,"SET @titulli ='${Titulli}'");
		mysqli_query($lidh_mdh,"SET @pershkrimi ='${Pershkrimi}'");
		mysqli_query($lidh_mdh,"SET @dosja ='${Dosja}'");
		mysqli_query($lidh_mdh,"SET @pamjafaqes ='${PamjaFaqes}'");
		$rezultati=mysqli_query($lidh_mdh,"CALL ModifikoTeDhena(@titulli,@pershkrimi,@dosja,@pamjafaqes,@id_tdh)");
		if($rezultati){
			header("Location: menaxho_tedhena.php");
		}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
	}
}
?>
<?php

$ID_TeDhenat=$_GET['ID_TeDhenat'];
 
$rezultati = mysqli_query($lidh_dhdh,"CALL SelektoTeDhena('$ID_TeDhenat')");

while($res = mysqli_fetch_array($rezultati))
{
	$Titulli1 = $res['Titulli'];
	$Pershkrimi1 = $res['Pershkrimi'];
	$PamjaFaqes1 = $res['PamjaFaqes'];
	$Dosja1 = $res['Dosja'];
	
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
		<title>Uebaplikacioni per Menaxhimin e Banesave</title>
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
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<p style="text-align:right;">Përshëndetje, <em><?php  echo $kyc_perd;?>!</em></p>
										
									<div class="table-wrapper">
										<form enctype="multipart/form-data" method="post" action="modifiko_tedhenat.php">
											<table>
												<tbody>
													
													<tr>
														<td>Titulli</td>
														<td><input type="text" name="Titulli" value='<?php echo $Titulli1;?>' required /></td>
													</tr>
													<tr><td>Pershkrimi</td>
											<td><textarea name="Pershkrimi"  rows="10" cols="30"><?php echo $Pershkrimi1;?></textarea></td></tr>
													<tr>
														<td>Dosja</td>
														<td><input type="text" name="Dosja" value='<?php echo $Dosja1;?>' required /></td>
													</tr>
												
												
														<tr>
														<td>Pamja Faqes</td>
														<td><input type="text" name="PamjaFaqes" value='<?php echo $PamjaFaqes1;?>'  required /></td>
													</tr>
													<tr>
														<input type="hidden" name="ID_TeDhenat"  value='<?php echo $_GET['ID_TeDhenat'];?>' class="button primary small" />
														<td><input type="submit" name="modifiko_tedhenat" value="Modifiko" class="button primary small" ></td>
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