<?php

	session_start();
	session_destroy();
	
		setcookie("PHPSESSID", "", time()-1, "/");
		
		if (($_COOKIE['Farmer']) == "Farmer")
			{setcookie("Farmer", "Farmer", time()-1, "/");}
		
		else if (($_COOKIE['Admin']) == "Admin")
			{setcookie("Admin", "Admin", time()-1, "/");}
		
		else if (($_COOKIE['CompanyRepresentative']) == "CompanyRepresentative")
			{setcookie("CompanyRepresentative", "CompanyRepresentative", time()-1, "/");}
		
		else if (($_COOKIE['AgriFirmIT']) == "AgriFirmIT")
			{setcookie("AgriFirmIT", "AgriFirmIT", time()-1, "/");}
		
		else if (($_COOKIE['AgriSpecialist']) == "AgriSpecialist")
			{setcookie("AgriSpecialist", "AgriSpecialist", time()-1, "/");}
	
	
	header("location: ../../login/Login.php");
	
?>