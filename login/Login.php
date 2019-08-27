
<?php
error_reporting(0);
	
	{
		if (($_COOKIE['Farmer']) == "Farmer")
			{
				header("location: ../homepage/Farmer/Farmer_Dashboard.php");
			}
		
		else if (($_COOKIE['Admin']) == "Admin")
			{
				header("location: ../homepage/Farmer_Dashboard.php");
			}
		
		else if (($_COOKIE['CompanyRepresentative']) == "CompanyRepresentative")
			{
				header("location: ../homepage/CompanyAgent/Companis_dashboard.php");
			}
		
		else if (($_COOKIE['AgriFirmIT']) == "AgriFirmIT")
			{
				header("location: ../homepage/Agri.FirmIT_agent/agrifirmIT_Dashboard.php");
			}
		
		else if (($_COOKIE['AgriSpecialist']) == "AgriSpecialist")
			{
				header("location: ../homepage/Agri_specialist_dashboard.php.php");
			}
	}


?>



<html>
<head>
<title>Agro.FirmIT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>


<fieldset>
</br>
   <center>  <legend><b> AGRICULTURAL FIRM & INFORMATION TECHNOLOGIES </b></legend> </center>

	<form method="post" action="logcheck.php">
		<br/>


		<div class="w3-cell-row">
  <div class="w3-container w3-red w3-cell w3-cell-top">
   
    <img id="post_full_img" src="img.JPG" />
  </div>
  <div class="w3-container w3-green w3-cell w3-cell-middle">
    <table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td><div id="logpg"> UserName </div> </td>
				
				<td>
			 
				<input class="w3-input w3-border" name = "username" type="text" placeholder="UserName/Number"  value="" />

				</td>
				<td></td>
			</tr>

		<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>
					<div id="logpg"> Password </div> </td>
				
			
				<td>
			
					<input class="w3-input w3-border" name="password" type="password" placeholder = "Enter your valid password"></td>
				<td></td>
			</tr>
			
		</table>
		<hr/>
	 	<center>
	 	<input name = "rm" type = "checkbox" value= "rm"> Remember Me </br>
		</br>
		<button class="w3-btn w3-blue" name="Login" value="Login" type="submit" onclick="logcheck.php">Login 
		</button>
		<button class="w3-btn w3-blue" name ="forget" value="forget" type="submit" onclick="forget.php">Forget Password </button>
		</center>
		<br/>
		<center>
		<a href = "../reg/reg.php"> Sign Up </a>
		</center>
  </div>

		
	</form>
</fieldset>


</body>
</html>