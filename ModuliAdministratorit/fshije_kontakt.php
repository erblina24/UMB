<?php

include("konfigurimi.php");


$ID_Kontakti = $_GET['ID_Kontakti'];


$rezultati = mysqli_query($lidh_fk,"FshijKontakt('$ID_Kontakti')");


header("Location:menaxho_kontakte.php");
?>
