
<?php
error_reporting(0);
?>



<html>
<head>
<title>Agro.FirmIT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>


<fieldset>
</br>
   <center>  <legend><b> AGRICULTURAL FIRM & INFORMATION TECHNOLOGIES </b></legend> </center>

	<form method="post" action="forgetcheck.php">
		<br/>
<center>
  <div class="w3-container w3-green w3-cell w3-cell-middle"> 
    <table width="100%" cellpadding="0" cellspacing="0">
			<tr> </br>
				<td><div class="w3-left-align"> Phone Number </div> </td>
				
				<td>
			 
				<input class="w3-input w3-border-left" name = "forgetphone" type="text" placeholder="Phone Number"  value="" />

				</td>
				<td></td>
			</tr>

		<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>
					<div class="w3-left-align">  New Password </div> </td>
				
			
				<td>
			
					<input class="w3-input w3-border" name="forgetpassword" type="password" placeholder = "Enter new valid password"></td>
				<td></td>
			</tr>
			
		</table>
		<hr/>
	 	<center>
		<button class="w3-btn w3-blue" value="forget" name="forget" type="submit" onclick="forgetcheck.php" > Submit  
		</button>
		<button class="w3-buttonleft w3-blue " type="submit" name="Login" onclick="Login.php" >Login </button>
		</center>
	
		<center>
		<a href = "../reg/reg.php"> Sign Up </a>
		</center>

  </div>
</center>
		
	</form>
</fieldset>
</body>
</html>