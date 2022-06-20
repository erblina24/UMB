<?php

include('konfigurimi.php');
session_start();
$kon_perd=$_SESSION['Emri_Perdoruesit'];
$ses_sql = mysqli_query($lidh,"CALL SelektoPerdoruesKontrollo('$kon_perd')");
$rresht=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$kyc_perd=$rresht['Emri_Perdoruesit'];
if(!isset($kon_perd))
{
header("Location: index.php");
} ?>