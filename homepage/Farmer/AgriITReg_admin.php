<?php
	error_reporting(0);
 	$notification_id = $_GET['status'];
 	
 	
 	$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlget_noti_data = " SELECT `notification_data` FROM `agrifarmit_notification` WHERE `notification_id` = '$notification_id'";
			echo "path id: ".$notification_id;
			$result1 = mysqli_query($conn,$sqlget_noti_data);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$datapath=  $row['notification_data'];
				}
			}


			$arr_data = array(); // create empty array
  	 		$jsondata = file_get_contents($datapath);
  	 		 $arr_data = json_decode($jsondata, true);
			  // print_r($arr_data);
			   
			   	$fname = $arr_data[First_Name];
			   	$lname = $arr_data[Last_Name];
			   	$phone=$arr_data[Phone];
				$email=$arr_data[Email];
				$password=$arr_data[Password];
				$nid=$arr_data[NID];
				$gender=$arr_data[Gender];

				mysqli_close($conn);


 	if(isset($_POST['submit']))
 	{
 		if(isset($_GET['status']))
 		{
 			header("location: Farmer_dashboard.php?Invalid_request");
 		}
 		else
 		{	
 			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlget_noti_data = " SELECT `notification_data` FROM `agrifarmit_notification` WHERE `notification_id` = '$notification_id'";
			//echo "path id: ".$notification_id;
			$result1 = mysqli_query($conn,$sqlget_noti_data);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$datapath=  $row['notification_data'];
				}
			}


			$arr_data = array(); // create empty array
  	 		$jsondata = file_get_contents($datapath);
  	 		$arr_data = json_decode($jsondata, true);
			  // print_r($arr_data);
			   
			   	$fname = $arr_data[First_Name];
			   	$lname = $arr_data[Last_Name];
			   	$phone=$arr_data[Phone];
				$email=$arr_data[Email];
				$password=$arr_data[Password];
				$nid=$arr_data[NID];
				$gender=$arr_data[Gender];

				mysqli_close($conn);




 			$conn2 = mysqli_connect('', 'root', '', 'agrofirmit');
 		
 		
 		echo $nid ;
 		$sql = "INSERT INTO `userreg`(`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `gender`, `type`, `NID`) VALUES ('','$fname','$lname','$phone','$email','$password','$gender','AgriIT','$nid')";
						$result = mysqli_query($conn2, $sql);
						
							//header("location: Farmer_dashboard.php?registration_confirmed");
 	}
 }
 	

			mysqli_close($conn2);

 	



?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>AgriIT REGISTRATION</b></legend>
</head>

<body>
<fieldset>
    
	<center>
	
		<form method="post" action="adminaproval.php?status=<?php echo$notification_id; ?>">
			<br/>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>First Name</td>
					<td>:</td>
					<td><input name="fname" id = "fname" type="text" value="<?php echo"$fname"?>"  readonly ></td>
					
					<td><img style="visibility:hidden;" id="fnamealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
					</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Last Name</td>
					<td>:</td>
					<td><input name="lname" id = "lname" type="text" value="<?php echo"$lname"?>" readonly></td>
						
					<td><img style="visibility:hidden;" id="lnamealt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>

					
				<tr>
					<td>Phone</td>
					<td>:</td>
					<td><input name="phone" id = "num" type="text" value="<?php echo"$phone"?>" readonly ></td>
					
					<td><img style="visibility:hidden;" id="numalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input name="email" id="mail" type="text" value="<?php echo"$email"?>" readonly>
						<abbr title="hint: sample@example.com"><b>i</b></abbr>
					</td>
					
					<td><img style="visibility:hidden;" id="mailalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
					
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<input name="password" id="pass" type="password" value="<?php echo"$password"?>" readonly >
						<abbr title="Must Be Atleast 6"><b>i</b></abbr>
					</td>
						
					<td><img style="visibility:hidden;" id="passalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td>
						<input name="cpassword" id="cpass" type="password" value="<?php echo"$password"?>" readonly>
						<abbr title="Must Be Atleast 6"><b>i</b></abbr>
					</td>
					<td><img style="visibility:hidden;" id="cpassalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
				<tr>
					<td>National ID Number</td>
					<td>:</td>
					<td>
						<input name="nid" id="nid" type="text" value="<?php echo"$nid"?>" readonly>
					</td>
					<td><img style="visibility:hidden;" id="nidalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				
					
					
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Gender</legend>    
							<input name="gender" id="gen"  type="radio" value="<?php echo"$gender"?>" checked onclick="genCheck()"><?php echo"$gender"?>
							
						</fieldset>
					</td>
					
					<td><img style="visibility:hidden;" id="genalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
							
			</table>
				<br/>
				<input type="submit" id="submit" name="submit" value="submit" >
				
		</form>
	</center>

</fieldset>


</body>
</html>

