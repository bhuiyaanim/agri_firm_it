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
	<legend>Upcoming Product List</legend>
	<?php include_once "../head&foot/Farmerheader.php";?>
	<form>
	<br/>
		<table style="width:100%">
		  <tr>
			<th>Product Name</th>
			<th>Ditails</th>
		  </tr>
		  <tr>
			<?php
				$myfile = fopen("info.txt", "r");
				$data   = fread($myfile, filesize("info.txt"));
				fclose($myfile);
				$arr1 = explode("|", $data);
				$arr2 = explode("/", $data);
			?>
			<td><?php echo $arr1[0];?></td>
			<td><?php echo $arr2[1];?></td>
		  </tr>
		  <tr>
			<td><?php echo $arr1[1];?></td>
			<td><?php echo $arr2[2];?></td>
		  </tr>
		  <tr>
			<td><?php echo $arr1[2];?></td>
			<td><?php echo $arr2[3];?></td>
		  </tr>
		  
		  
		</table>
		
	</form>
	<?php include_once "../head&foot/footer.php";?>
</fieldset>

<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
?>