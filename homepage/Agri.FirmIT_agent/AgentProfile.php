<?php
error_reporting(0);
session_start();
$phoneno=$_SESSION['username'];

$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlprofile = " SELECT * FROM `userreg` WHERE `phone`='$phoneno'";
			$result1 = mysqli_query($conn,$sqlprofile);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$fname   =  $row['firstname'];
				$lname   =  $row['lastname'];
				$phone   =  $row['phone'];
				$email   =  $row['email'];
				$password=  $row['password'];
				$nid     =  $row['nid'];
				$gender  =  $row['gender'];
				$type   =  $row['type'];
				}
			}


?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>REGISTRATION</b></legend>
	
	<style rel="stylesheet">
	.form_area
			{
				position: absolute;
				left: 33%;
				top:.8%;				
				height: 98.4%;
				width: 400px;
				position: absolute;				
				background-color:#f1f1f1;
				opacity:.9;

			}
			.form_inner_area
			{
				top:1%;
				height: 200px;
				width: 600px;
				position: absolute;
				left: 50px;						
			}
	body	
	{
		margin:0 auto;
		background: url("img/land_activity.jpg") no-repeat;
		background-size: 100%;
		font-family: 'Times New Roman', Times, serif;
			}
	.error {
		color: #FF0000;
		//display: inline-block;
	}
	input[type=submit] {
			width: 50%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 3px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			top:55%;
			
			
		}
		
			input[type=submit]:hover {
			background-color: #45a049;
		}

		
		input[type=text] {
			width: 50%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
			input[type=password] {
			width: 50%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
		select {
			width:24.65%;
			padding: 12px 20px;
			margin: 3px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-family: inherit;
			font-size: 0.95em;
		}
		
			.copyright {
		position: absolute;				
		height: 6%;
		width: 20%;
		position: absolute;				
		background-color:#f1f1f1;
		opacity:.9;
		border-radius: 4px;
		bottom: 1%;
		right: .5%;
		text-align: center;
	}
		
	</style>
	
	
	
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
						<input name="password" id="pass" type="text" value="<?php echo"$password"?>" readonly >
						<abbr title="Must Be Atleast 6"><b>i</b></abbr>
					</td>
						
					<td><img style="visibility:hidden;" id="passalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
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
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Type</legend>    
							<input name="type" id="type"  type="radio" value="<?php echo"$type"?>" checked onclick="genCheck()"><?php echo"$type"?>
							
						</fieldset>
					</td>
					
					<td><img style="visibility:hidden;" id="genalt" width="30" height="30" style="float:left;width:20px;height:20px;"></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
							
			</table>
				<br/>
				<button type="button" name="home" value="home" onclick="(location.href='agrifirmIT_Dashboard.php')" > Home </button>>
				
		</form>
	</center>

</fieldset>


</body>
</html>

