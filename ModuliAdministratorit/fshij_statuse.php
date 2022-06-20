<?php

include("konfigurimi.php");


$p_ID_Statusi = $_GET['ID_Statusi'];


$rezultati = mysqli_query($lidh_fs,"CALL FshijStatus('$p_ID_Statusi')");


header("Location:menaxho_statuse.php");
?>
