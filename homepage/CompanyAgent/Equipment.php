<?php
	error_reporting(0);
	session_start();
	$phone = $_SESSION['username'];

	


?>



<!DOCTYPE html>
<html>
	<head>
		<legend><b>Products</b></legend>
		<center><?php include_once "AgriSpecialistheader.php";?></center>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>


	</head>
	
	<body>
	<form method="post" action="S_Land_info.php">
		<center>
			<div>
				<ul>
					  <li><a href="Companis_dashboard.php">HOME</a></li>
					  <li><a href="Other_comoanis_product.php">OTHERS COMPANY PRODUCT</a></li>

					  <li class="dropdown">
					    <a href="javascript:void(0)" class="dropbtn">OPERATION</a>
					    <div class="dropdown-content">
					      <a href="addProduct.php">Insert</a>
					      <a href="productUpdate.php">Update</a>
					      <a href="deleteProduct.php">Delete</a>
					    </div>
					  </li>
					  <li><a href="Logout.php">LOGOUT</a></li>
					</ul>
			</div>
			<div id="result">
			
			</div>
		</center>
	</form>

	</body>
</html>

<?php
	if(isset($_POST['allcompany']))
				
echo "";			
			{
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			if(!$conn){
						echo "DB Error: ".mysqli_connect_error();

			}
			else
			{
				

				$sql = "SELECT * FROM `comapany_product` WHERE `phone` = '$phone' ";
				$result = mysqli_query($conn, $sql);
			}
		}

		echo "<br/><center>
				<table border='1' id='table' >
				<tr align='center'>
					<td>Serial No</td>
					<td>HotLine</td>
					<td>Product Name</td>
					<td>Arrival Type</td>
					<td>Product Type</td>
					<td>Product Grade</td>
					<td>Product Specialites</td>
					<td>Product Expiry Date</td>
					<td>Product Avilable Status</td>
					<td>Product Price</td>
				</tr>";

	
		while($row= mysqli_fetch_assoc($result))
		{
				
			
			echo "<tr>
					<td>".$row['S.L']."</td>
					<td>".$row['phone']."</td>
					<td>".$row['Product_Name']."</td>
					<td>".$row['Product_Arrival_Type']."</td>
					<td>".$row['Product_Type']."</td>	
					<td>".$row['Product_Grade']."</td>	
					<td>".$row['Product_SPECIALITES']."</td>
					<td>".$row['Product_ExpairDATE']."</td>	
					<td>".$row['Product_Avilable']."</td>	
					<td>".$row['Product_price']."</td>		
				</tr>";

		}
				
		echo "</table>
				</center>";
		mysqli_close($conn);
		
	

?>