<?php
	error_reporting (0);
	session_start();
		if (($_COOKIE['AgriSpecialist']) == "AgriSpecialist")
		{
			$idflag = 1;
		}
		else if(isset($_SESSION['username'])){
			if (($_SESSION['type']) == "AgriSpecialist")
				{
					$idflag = 1;
				}
		}
	
	if($idflag == 1){
		?>

<fieldset>
	<legend>Other Compani's</legend>
	<?php include_once "AgriSpecialistheader.php";?>
	<form>
		<br/>
		<center>
		<input type="button" name="allcompany" onclick="location.href='S_ALL_Company_product.php';" value="All Products" />
		<input type="button" onclick="location.href='S_Other_new_products.php';" value="New Products" />
		<input type="button" onclick="location.href='S_Other_tranding_products.php';" value="Tranding Products" />
		<input type="button" onclick="location.href='S_Other_upcoming_products.php';" value="Upcoming Products" /><br/><br/><br/>
		
		<img src="p1.jpg" alt="Promotional Products" width="500" height="333">
		</center>
	</form>
	<?php include_once "../head&foot/footer.php";?>
</fieldset>

<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
?>