<?php
	error_reporting (0);
	session_start();
	
	
			
		if(isset($_SESSION['username']))
		{
			if (($_SESSION['type']) == "CompanyRepresentative")
				{
					$idflag = 1;
				}
		}
	
		
		else if (isset($_COOKIE['Farmer'])) 
		{ 
			
			if (($_COOKIE['CompanyRepresentative']) == "CompanyRepresentative")
				{
					$idflag = 1;
				}
		}
	
	if($idflag == 1){
		
?>

<fieldset>
	<legend>Home Page</legend>
	<center><?php include_once "CompanyAgentheader.php";?></center>
	<form>
		<br/>
		<button type="button" onclick="location.href='Land_info.php';" value="Land Information"> Land Information 
			</button> <br/><br/>

		<button type="button" onclick="location.href='Equipment.php';" value="Product" /> Product
			</button> <br/><br/>

		<button type="button" onclick="location.href='Other_companis.php';" value="Other Companis" /> Other Companis
			
			</button> <br/><br/>

		<button type="button" onclick="location.href='Specialist_news.php';" value="Specialist News" />Specialist News
			
			</button> <br/><br/>

		<button type="button" onclick="location.href='Account.php';" value="Account/Billing" /> Account/Billing
			
			</button> <br/><br/>

		<button type="button" onclick="location.href='Logout.php';" value="Log Out" /> Logout
					
			</button> <br/><br/>
	</form>
	<center><?php include_once "../head&foot/footer.php";?></center>
</fieldset>

<?php
	}
	else{
		//echo $_SESSION['username'];
		header("location: ../Login.php?status=invalidrequest");
	}
?>