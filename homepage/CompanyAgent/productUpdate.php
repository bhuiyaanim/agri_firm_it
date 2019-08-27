<?php
	error_reporting(0);
	session_start();
	$phone = trim($_SESSION['username']);
	$companyID=$phone;

	$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			
			$sql1 = " SELECT * FROM `comapany_product` WHERE `phone` = '$phone'";
			$result1 = mysqli_query($conn,$sql1);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				
				
				$productNo=$row['S.L'];
				$productName=$row['Product_Name'];
				$product_type=$row['Product_Type'];
				$product_arrival_st=$row['Product_Arrival_Type'];
				$product_grade=$row['Product_Grade'];
				$product_special=$row['Product_SPECIALITES'];
				$product_exp=$row['Product_ExpairDATE'];
				$product_stock=$row['Product_Avilable'];
				$product_price=$row['Product_price'];
				}
				print_r($row);
			}


?>

<!DOCTYPE html>
<html>
<head>
	<title> Update Product    </title>
</head>
<body>
<fieldset>
			<center>
				<form method="post" action="addProductUpdateCheck.php">
					Product ID
							<td>:</td>
							<td><input name="productID"  type="text" value=" <?php echo $productNo; ?>  " readonly > </td>
							</tr>		
				<tr><td colspan="4"><hr/></td></tr>
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Company ID</td>
							<td>:</td>
							<td><input name="cID" id = "cID" type="text" value=" <?php echo $companyID; ?>  " readonly > </td>
							</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Product Name</td>
							<td>:</td>
							<td><input name="pName" id = "pName" type="text" value=" <?php echo $productName; ?>  "></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product Arrival Status</legend>    
									<input name="p_arrival_st"  type="radio" value=" <?php echo $product_arrival_st; ?> " checked > <?php echo $product_arrival_st; ?>
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product Type</legend>    
									<input name="p_type"  type="radio" value=" <?php echo $product_type; ?>  "  checked > <?php echo $product_type; ?>  
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product Grade</legend>    
									<input name="p_grade"  type="radio" value=" <?php echo $product_grade; ?>  " checked > <?php echo $product_grade; ?> 
									
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Product Specialities</td>
							<td>:</td>
							<td><input name="pSpecial" type="text" value=" <?php echo $product_special; ?> " >
							</td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Product Expair Date</td>
							<td>:</td>
							<td><input name="pExpDate" type="text" value=" <?php echo $product_exp; ?>  "></td>
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<fieldset>
									<legend>Product In Stock</legend>    
									<input name="p_stock"  type="radio" value=" <?php echo $product_stock; ?>  " checked > <?php echo $product_stock; ?>  
									
								</fieldset>
							</td>	
						</tr>
						<tr><td colspan="4"><hr/></td></tr>
								<tr>
									<td>Product Price</td>
									<td>:</td>
									<td><input name="pPrice" type="text" value=" <?php echo $product_price; ?>  "> </td>
								</tr>
					</table>
						<input type="submit" id="submit" name="submit" value="Submit">

						<input type="submit" id="delete" name="delete" value="delete">
				</form>	
		</center>
		</fieldset>
</body>
</html>




