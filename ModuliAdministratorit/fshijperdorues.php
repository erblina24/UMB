<?php

include("konfigurimi.php");


$ID_Perdoruesi = $_GET['ID_Perdoruesi'];


$rezultati = mysqli_query($lidh_fp,"CALL FshijPerdoruesit('$ID_Perdoruesi')");


header("Location:fshij_perdorues.php");
?>
