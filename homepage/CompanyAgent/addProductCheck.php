<?php
	error_reporting(0);
	session_start();
	$phone= $_SESSION['username'];
	
	if (isset($_POST['submit']))
	{
	
			$companyID=$phone;
			$productName=trim($_POST['pName']);
			$product_type=$_POST['p_type'];
			$product_arrival_st=$_POST['p_arrival_st'];
			$product_grade=$_POST['p_grade'];
			$product_special=$_POST['pSpecial'];
			$product_exp=$_POST['pExpDate'];
			$product_stock=$_POST['p_stock'];
			$product_price=$_POST['pPrice'];
			
		
			if ($companyID == "" ||	$productName == "" || $product_type == ""|| $product_arrival_st == "" || $product_grade == ""|| $product_special == ""|| $product_exp =="" || $product_stock =="" || $product_price == "")
			{
				header("location: addProduct.php?Invalid_Data");
			}
			else
			{
		


					$conn1 = mysqli_connect('', 'root', '', 'agrofirmit');

						if(!$conn1){
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							
						$add_sql="INSERT INTO `comapany_product`(`S.L`, `phone`, `Product_Name`, `Product_Arrival_Type`, `Product_Type`, `Product_Grade`, `Product_SPECIALITES`, `Product_ExpairDATE`, `Product_Avilable`, `Product_price`) VALUES ('','$companyID','$productName','product_arrival_st','$product_type','$product_grade','product_special','$product_exp','$product_stock','product_price')";
						
						$result1 = mysqli_query($conn1, $add_sql);
						mysqli_close($conn1);
				
							header("location: Equipment.php");
				
			} //else ending
			
	} //isset ending
}
	
	else
	{
		echo "Invalid request";
	}
	
?>