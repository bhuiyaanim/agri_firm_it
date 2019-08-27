<?php
error_reporting(0);





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
						<td><input name="fname" id = "fname" type="text" value="" placeholder="Enter your First Name"></td>
						
						<td id="fnamealert"></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					<tr>
						<td>Last Name</td>
						<td>:</td>
						<td><input name="lname" type="text" value="" placeholder="Enter your Last Name"></td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>

					
					<tr>
						<td>Phone</td>
						<td>:</td>
						<td><input name="phone" type="text" value="" placeholder="Atleast 11 digit" > 
						</td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<input name="email" type="text" value="" placeholder="anyone@gmail.com">
							<abbr title="hint: sample@example.com"><b>i</b></abbr>
						</td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					<tr>
						<td>Password</td>
						<td>:</td>
						<td>
								<input name="password" type="password" value="" placeholder="Enter your password">
								<abbr title="Must Be Atleast 6"><b>i</b></abbr>
						</td>
						
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					<tr>
						<td>Confirm Password</td>
						<td>:</td>
						<td>
								<input name="cpassword" type="password" value="" placeholder="Re Enter your password">
								<abbr title="Must Be Atleast 6"><b>i</b></abbr>
						</td>
						<td></td>
					</tr>		
					<tr><td colspan="4"><hr/></td></tr>
					
					
					
					<tr>
						<td colspan="3">
							<fieldset>
								<legend>Gender</legend>    
								<input name="gender" type="radio" value="male">Male
								<input name="gender" type="radio" value="Female">Female
								<input name="gender" type="radio" value="Other">Other
							</fieldset>
						</td>
							<td></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Type</legend>    
									<input name="type" type="radio" value="AgriIT_Agent" checked="true">AgriIT_Agent
								</fieldset>
							</td>
							<td></td>
						</tr>
						
					</table>
					<hr/>
					<input type="submit" name="submit" value="Submit">
					
					<input type="reset">
					</br>
					<a href = "../login/Login.php"> Sign In </a>
			</form>




</center>
</fieldset>
</body>
</html>