<?php
	error_reporting (0);
	session_start();
	
	$myfile = fopen("../reginfo.txt", 'r');
	//$id = "";
	$idflag = 0;
	//echo $idflag;
	while (!feof($myfile)) 
	{
		$data = fgets($myfile);
		$arr = explode("|", $data);
		//echo $arr[1];
		//echo $_SESSION['username'];
		//$id = $arr[1];
		if (($_COOKIE['AgriFirmIT']) == "AgriFirmIT")
		{
			$idflag = 1;
		}
		else if(isset($_SESSION['username'])){
			if (($_SESSION['type']) == "AgriFirmIT")
				{
					$idflag = 1;
				}
		}
	
	}
	//echo $idflag;
	//echo $_SESSION['username'];
	
	
	if($idflag == 1){
		//echo $_SESSION['username'];
	


?>

<fieldset>
	<legend>Agent Home Page</legend>
	<center><?php include_once "../head&foot/Agri_FirmIT_AGENTheader.php";?></center>
	<form>
		<br/>
		<center>
		<input type="button" onclick="location.href='farmerReg.php';" value="Farmer Registration" />
		<input type="button" onclick="location.href='../log_out.php';" value="LOG OUT" />
		
		
		</center>
	</form>
	<center><?php include_once "../head&foot/footer.php";?></center>

</fieldset>

<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
?>