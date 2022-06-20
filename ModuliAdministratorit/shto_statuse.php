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

if(isset($_POST['shtostatus'])) {	
	$Statusi = $_POST['Statusi'];
	
	if(empty($Statusi)) {
				
		if(empty($Statusi)) {
			echo "<font color='red'>Fusha Statusi eshte e zbrazet.</font><br/>";
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu</a>";
	} else { 
		
		$result = mysqli_query($lidh_statusi, "CALL ShtoStatus('$Statusi')");
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_statuse.php';
         }, 2000);
      </script>";
		 echo"<p><b>E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 2 sekonda. <b></p>";
		 
	}
}
?>
</body>
</html>