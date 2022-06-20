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
<?php

include_once("kontrollo.php");

if(isset($_POST['shtoperdorues'])) {	
	$Emri_Perdoruesit = $_POST['Emri_Perdoruesit'];
	$Fjalekalimi = MD5($_POST['Fjalekalimi']);
	$Emaili = $_POST['Emaili'];
	if(empty($Emri_Perdoruesit) || empty($Fjalekalimi) || empty($Emaili)) {
				
		if(empty($Emri_Perdoruesit)) {
			echo "<font color='red'>Fusha Emri Perdoruesit eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fusha Fjalekalimi eshte e zbrazet.</font><br/>";
		}
		if(empty($Emaili)) {
			echo "<font color='red'>Fusha Emaili eshte e zbrazet.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu</a>";
	} else { 
		
		$result = mysqli_query($lidh_shp, "CALL ShtoPerdorues('$Emri_Perdoruesit','$Fjalekalimi','$Emaili')");
		
		
			echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 2000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 2 sekonda. <b></p>";
		
	}
}
?>

</body>
</html>