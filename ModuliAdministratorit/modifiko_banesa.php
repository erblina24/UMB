<?php

	include("kontrollo.php");	
?>

<?php

include_once("konfigurimi.php");

if(isset($_POST['modifiko_banesa']))
{	
	$ID_Banesa=$_POST['ID_Banesa'];
	$Kati=$_POST['Kati'];
	$MadhesiaBaneses=$_POST['MadhesiaBaneses'];
	$ID_Statusi=$_POST['ID_Statusi'];	
	$CmimiBaneses=$_POST['CmimiBaneses'];
	$FotojaBaneses =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$EmriFotos = $_FILES['userfile']['name'];
	$maxsize = 10000000;
	
	if(empty($Kati) || empty($MadhesiaBaneses) || empty($CmimiBaneses)) {	
			
		if(empty($Kati)) {
			echo "<font color='red'>Fusha Kati eshte e zbrazet..</font><br/>";
		}
		
		if(empty($MadhesiaBaneses)) {
			echo "<font color='red'>Fusha Madhesia Baneses eshte e zbrazet.</font><br/>";
		}
		
		if(empty($CmimiBaneses)) {
			echo "<font color='red'>Fusha Cmimi Baneses eshte e zbrazet.</font><br/>";
		}
		
				
	} else {	
		
		mysqli_query($lidh_modifikoB,"SET @id_b =${ID_Banesa}");
		mysqli_query($lidh_modifikoB,"SET @kati =${Kati}");
		mysqli_query($lidh_modifikoB,"SET @madhesia =${MadhesiaBaneses}");
		mysqli_query($lidh_modifikoB,"SET @id_statusi =${ID_Statusi}");
		mysqli_query($lidh_modifikoB,"SET @fotoB ='${FotojaBaneses}'");
		mysqli_query($lidh_modifikoB,"SET @emriB ='${EmriFotos}'");
		mysqli_query($lidh_modifikoB,"SET @Cmimi =${CmimiBaneses}");
		$rezultati=mysqli_query($lidh_modifikoB,"CALL ModifikoBanesa(@kati,@madhesia,@Cmimi,@id_statusi,@fotoB,@emriB,@id_b)");
		if($rezultati){
			header("Location: menaxho_banesa.php");
		
	}else
		{
			die("Procedura nuk mund te ekzekutohet!");
		}
	}
}
?>

<?php

$ID_Banesa = $_GET['ID_Banesa'];

$rezultati = mysqli_query($lidh_selbanesa,"CALL SelektoBanesa('$ID_Banesa')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Kati = $rez['Kati'];
	$MadhesiaBaneses = $rez['MadhesiaBaneses'];
	$CmimiBaneses = $rez['CmimiBaneses'];
	$FotojaBaneses = $rez['FotojaBaneses'];
	$ID_Statusi = $rez['ID_Statusi'];
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
										<form enctype="multipart/form-data" method="post" action="modifiko_banesa.php" name="form1">
											<table>
												<tbody>
													<tr>
														<select name="ID_Statusi"><option selected="selected" required>Zgjedh Statusin</option>
														<?php
												$rez=mysqli_query($lidh_selStat,"CALL SelektoStatus()");
												while($rresht=$rez->fetch_array())
												{
												?>
												<option value="<?php echo $rresht['ID_Statusi']; ?>"><?php echo $rresht['Statusi']; ?></option>
												<?php
												}
												?>
													</select><br/>
													</tr>
													<tr>
														<td>Kati</td>
														<td><input type="text" name="Kati" value='<?php echo $Kati;?>' required /></td>
													</tr>
													<tr>
														<td>Madhesia Baneses ne m<sup>2</sup></td>
														<td><input type="text" name="MadhesiaBaneses" value='<?php echo $MadhesiaBaneses;?>' required /></td>
													</tr>
												
												
														<tr>
														<td>Cmimi Baneses ne €</td>
														<td><input type="text" name="CmimiBaneses" value='<?php echo $CmimiBaneses;?>'  required /></td>
													</tr>
													<tr>
													<td>Fotoja Baneses<input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
													</tr>
													<tr>
														<input type="hidden" name="ID_Banesa"  value='<?php echo $_GET['ID_Banesa'];?>' class="button primary small" />
														<td><input type="submit" name="modifiko_banesa" value="Modifiko" class="button primary small" ></td>
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