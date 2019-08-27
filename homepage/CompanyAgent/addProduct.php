<?php
	error_reporting(0);
	session_start();
	$phone = trim($_SESSION['username']);



?>


<!DOCTYPE html>
<html>
<head>
	<legend><b>Product Operation</b></legend>

 
</head>

<body>

    <fieldset>
			<center>
				<form method="post" action="addProductCheck.php">
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Company ID</td>
							<td>:</td>
							<td><input name="cID" id = "cID" type="text" value=" <?php echo $phone; ?> " Readonly> </td>
							</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Product Name</td>
							<td>:</td>
							<td><input name="pName" id = "pName" type="text" value="" placeholder="Enter product Name"></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product Arrival Status</legend>    
									<input name="p_arrival_st"  type="radio" value="YES" >YES
									<input name="p_arrival_st"  type="radio" value="Comming_Soon">Comming_Soon
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product Type</legend>    
									<input name="p_type"  type="radio" value="Pesticide" >Pesticide
									<input name="p_type"  type="radio" value="Fertilizer">Fertilizer
									<input name="p_type"  type="radio" value="Insecticide" >Insecticide
									<input name="p_type"  type="radio" value="Vitamin">Vitamin
									<input name="p_type"  type="radio" value="Other">Other
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product Grade</legend>    
									<input name="p_grade"  type="radio" value="AAAAA" >BEST
									<input name="p_grade"  type="radio" value="AAAA">AVARAGE
									<input name="p_grade"  type="radio" value="AAA" >LOW
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Product Specialities</td>
							<td>:</td>
							<td><input name="pSpecial" type="text" value="" placeholder="Enter product Specialiies"></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Product Expair Date</td>
							<td>:</td>
							<td><input name="pExpDate" type="text" value="" placeholder="Enter product Expair Date"></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product In Stock</legend>    
									<input name="p_stock"  type="radio" value="YES" >YES
									<input name="p_stock"  type="radio" value="NO" >NO
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
								<tr>
									<td>Product Price</td>
									<td>:</td>
									<td><input name="pPrice" type="text" value="" placeholder="Enter product Price"></td>
								</tr>


					</table>
						<br/>
						<input type="submit"  name="submit" value="submit" > </button>
				</form>	
		</center>
		</fieldset>
  



		
</body>
</html>