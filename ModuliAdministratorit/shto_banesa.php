<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body>
		<?php

include_once("konfigurimi.php");

if(isset($_POST['shtobanes'])) {	
	$Kati = $_POST['Kati'];
	$MadhesiaBaneses = $_POST['MadhesiaBaneses'];
	$ID_Statusi = $_POST['ID_Statusi'];
	$FotojaBaneses =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$EmriFotos = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; 
	 $CmimiBaneses = $_POST['CmimiBaneses'];
	
	if(empty($Kati) || empty($MadhesiaBaneses)|| empty($ID_Statusi) || empty($CmimiBaneses)) {
				
		if(empty($Kati)) {
			echo "<font color='red'>Fusha Kati eshte e zbrazet.</font><br/>";
		}
		
		if(empty($MadhesiaBaneses)) {
			echo "<font color='red'>Fusha Madhesia Baneses eshte e zbrazet.</font><br/>";
		}
		
		if(empty($ID_Statusi)) {
			echo "<font color='red'>Fusha Statusi eshte e zbrazet.</font><br/>";
		}
		if(empty($CmimiBaneses)) {
			echo "<font color='red'>Fusha Cmimi Baneses  eshte e zbrazet.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu</a>";
	} else if($CmimiBaneses<=200)
	        {
	        	trigger_error("Per te shtuar Banese cmimi i saj duhet te jete mbi 200 €. Ju lutem te vendosni Cmimin adekuat!");
	        	echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	    }
	    else { 
		 
			
			
		$rezultati = mysqli_query($lidh_shb, "CALL ShtoBanesa('$Kati','$MadhesiaBaneses','$ID_Statusi','$FotojaBaneses','$EmriFotos','$CmimiBaneses')");
		
		
			echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_banesa.php';
         }, 2000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 2 sekonda. <b></p>";
		 
	}
}
?>
</body>
</html>