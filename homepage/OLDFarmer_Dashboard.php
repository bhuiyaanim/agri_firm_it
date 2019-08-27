<?php
	error_reporting (0);
	session_start();
	
	$myfile = fopen("../reginfo.txt", 'r');
	$idflag = 0;
	while (!feof($myfile)) 
	{
		$data = fgets($myfile);
		$arr = explode("|", $data);
		if(isset($_SESSION['username'])){
		if (($_SESSION['type']) == "Farmer")
			{
				$idflag = 1;
			}
		}
		else if (isset($_COOKIE['Farmer']))
		{
			if (($_COOKIE['Farmer'])=="Farmer")
			{
				$idflag = 1;
			}
		}
	}
	
	if($idflag == 1)
	{
		

?>



 <!DOCTYPE html>

<html>
<fieldset>
	<legend>Home Page</legend>
	<center><?php include_once "../head&foot/Farmerheader.php";?></center>
	<form>
		<br/>
		<input type="button" onclick="location.href='Farmer/Land_info.php';" value="Land Activity" /><br/><br/>
		<input type="button" onclick="location.href='Farmer/Equipment.php';" value="Equipments" /><br/><br/>
		<input type="button" onclick="location.href='Farmer/Other_companis.php';" value="Company's News-Feed" /><br/><br/>
		<input type="button" onclick="location.href='Farmer/Specialist_news.php';" value="Specialist News" /><br/><br/>
		<input type="button" onclick="location.href='Farmer/Account.php';" value="Account/Billing" /><br/><br/>
		<input type="button" onclick="location.href='../log_out.php';" value="Log Out" /><br/><br/>
	</form>
	<center><?php include_once "../head&foot/footer.php";?></center>
</fieldset>
</html>
 
<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequestFARMER");
	}
?>