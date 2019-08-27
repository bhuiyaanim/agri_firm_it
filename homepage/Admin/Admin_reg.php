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
				$firstname=  $row['firstname'];
				$lastname=  $row['lastname'];
				$phone=  $row['phone'];
				$email=  $row['email'];
				$password=  $row['password'];
				$gender=  $row['gender'];
				$type=  $row['type'];
				$NID=  $row['NID'];

				}
			}





?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>REGISTRATION</b></legend>
	
</head>
<body>
<fieldset>
    
<center>
			<form method="post" action="regCheck.php">
				<br/>
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td>First Name</td>
						<td>:</td>
						<td><input name="fname" id = "fname" type="text" value="<?php echo"$firstname"?>" placeholder="Enter your First Name"></td>
						
						<td id="fnamealert"></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					<tr>
						<td>Last Name</td>
						<td>:</td>
						<td><input name="lname" type="text" value="<?php echo"$lastname"?>" placeholder="Enter your Last Name"></td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>

					
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td><input name="phone" type="text" value="<?php echo"$phone"?>" placeholder="Atleast 11 digit" > 
						</td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<input name="email" type="text" value="<?php echo"$email"?>" placeholder="anyone@gmail.com">
							<abbr title="hint: sample@example.com"><b>i</b></abbr>
						</td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					<tr>
						<td>Password</td>
						<td>:</td>
						<td>
								<input name="password" type="text" value="<?php echo"$password"?>" placeholder="Enter your password">
								<abbr title="Must Be Atleast 6"><b>i</b></abbr>
						</td>
						
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					<tr>
						<td>Confirm Password</td>
						<td>:</td>
						<td>
								<input name="cpassword" type="text" value="<?php echo"$password"?>" placeholder="Re Enter your password">
								<abbr title="Must Be Atleast 6"><b>i</b></abbr>
						</td>
						<td></td>
					</tr>
						
						<tr><td colspan="4"><hr/></td></tr>
					<tr>
						<td>NID</td>
						<td>:</td>
						<td>
								<input name="nid" type="text" value="<?php echo"$NID"?>" placeholder="NID">
						</td>
						<td></td>
					</tr>

					<tr><td colspan="4"><hr/></td></tr>
					
					
					
					<tr>
						<td colspan="3">
							<fieldset>
								<legend>Gender</legend>    
								<input name="gender" type="radio" value="<?php echo"$gender"?>" CHECKED > <?php echo"$gender"?>
							</fieldset>
						</td>
							<td></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Type</legend>    
									<input  name="type" type="radio"  value="<?php echo"$type"?>" CHECKED ><?php echo"$type"?>
								</fieldset>
							</td>
							<td></td>
						</tr>
						
					</table>
					<hr/>
					<input type="submit" name="submit" value="Submit">
					</br>
			</form>




</center>
</fieldset>
</body>
</html>