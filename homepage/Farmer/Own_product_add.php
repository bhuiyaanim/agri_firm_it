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
		else if (isset($_COOKIE['Farmer']))
		{
			{
				if (($_COOKIE['Farmer'])=="Farmer")
				{
					$idflag = 1;
				}
			}
		}
	
	}
	
	if($idflag == 1){
	
?>

<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

<fieldset>
	<legend>Add Products</legend>
	<?php include_once "../head&foot/Farmerheader.php";?>
	<form>
	<br/>
		
	</form>
	<?php include_once "../head&foot/footer.php";?>
</fieldset>

<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
?>