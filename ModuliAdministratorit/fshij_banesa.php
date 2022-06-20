<?php

include("konfigurimi.php");


$ID_Banesa = $_GET['ID_Banesa'];


$rezultati = mysqli_query($lidh_fb,"CALL FshijBanesa('$ID_Banesa')");

header("Location:menaxho_banesa.php");
?>
