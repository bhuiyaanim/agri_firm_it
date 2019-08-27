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
	<legend>Comment</legend>
	<?php include_once "../head&foot/AgriSpecialistheader.php";?>
	<form method="post" action="commentCheck.php">
		<br/>
		<table>
			<tr>
				<td>Farmer/Product Name</td>
				<td>:</td>
				<td><input name="f_p_name" type="text" value="" size="45"></td>
				<td></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td>:</td>
				<td><input name="comment" type="text" value="" size="45"></td>
				<td></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php include_once "../head&foot/footer.php";?>
</fieldset>

<?php
	}
	else{
		header("location: ../Login.php?status=invalidrequest");
	}
?>