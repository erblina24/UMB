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
<?php

include_once("konfigurimi.php");

if(isset($_POST['shtokontakt'])) {	
	$Subjekti = mysqli_real_escape_string($lidh_konInj,$_POST['Subjekti']);
	$Mesazhi = mysqli_real_escape_string($lidh_konInj,$_POST['Mesazhi']);
	$Emaili = mysqli_real_escape_string($lidh_konInj,$_POST['Emaili']);
	$Emaili= filter_var($Emaili, FILTER_SANITIZE_EMAIL);
	
	if(empty($Subjekti) || empty($Mesazhi) || empty($Emaili)) {			
		if(empty($Subjekti)) {echo "<font color='red'>Fusha Subjekti eshte e zbrazet.</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>Fusha Mesazhi  eshte e zbrazet</font><br/>";}
		if(empty($Emaili)) {echo "<font color='red'>Fusha Email eshte e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else if (!filter_var($Emaili, FILTER_VALIDATE_EMAIL)==true) {
		echo("Emaila e vendosur eshte jo valide. Ju lutem vendosni emailen ne formatin e duhur!");
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";

	}
	else{ 
		
		$rezultati = mysqli_query($lidh_kontakt, "CALL ShtoKontakt('$Subjekti','$Mesazhi','$Emaili')");
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 2000);
      </script>";
		 echo"<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 2 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
