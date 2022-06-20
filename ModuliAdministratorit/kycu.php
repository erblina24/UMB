<?php

	session_start();
	include("konfigurimi.php");
	$gabim = ""; 
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Emri_Perdoruesit"]) || empty($_POST["Fjalekalimi"]))
		{
			$gabim = "Kerkohet mbushja e te gjitha fushave!.";
		}else
		{

		
			$p_Emri_Perdoruesit=$_POST['Emri_Perdoruesit'];
			$p_Fjalekalimi=MD5($_POST['Fjalekalimi']);
			
			$sql="CALL  SelektoPerdoruesit('$p_Emri_Perdoruesit','$p_Fjalekalimi')";
			$rezultati=mysqli_query($lidh,$sql);
			$rresht=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['Emri_Perdoruesit'] = $p_Emri_Perdoruesit; 
				header("location: faqja_administratorit.php");
			}else
			{
				$gabim = "Emri Perdoruesit ose Fjalekalimi gabim.";
			}
		}
	}
?>