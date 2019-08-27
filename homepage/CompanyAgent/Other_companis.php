<?php
	error_reporting (0);
	session_start();
	
	$myfile = fopen("../../reginfo.txt", 'r');
	$idflag = 0;
	while (!feof($myfile)) 
	{
		$data = fgets($myfile);
		$arr = explode("|", $data);
		if(isset($_SESSION['username'])){
			if($_SESSION['username']== $arr[1]){
				$idflag = 1;
			}
		}
		else if(isset($_SESSION['username'])){
			if (($_SESSION['type']) == "AgriSpecialist")
				{
					$idflag = 1;
				}
		}
	
	}
	
	if($idflag == 1){
	
?>

<fieldset>
	<legend>Other Compani's</legend>
	<?php include_once "../head&foot/CompanyAgentheader.php";?>
	<form>
		<br/>
		<center>
		<input type="button" onclick="location.href='Other_comoanis_product.php';" value="All Products" />
		<input type="button" onclick="location.href='Other_new_products.php';" value="New Products" />
		<input type="button" onclick="location.href='Other_tranding_products.php';" value="Tranding Products" />
		<input type="button" onclick="location.href='Other_upcoming_products.php';" value="Upcoming Products" /><br/><br/><br/>
		
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