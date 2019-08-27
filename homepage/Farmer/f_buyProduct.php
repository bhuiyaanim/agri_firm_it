<?php 
session_start();
$phoneNo=trim($_SESSION['username']);
if(isset($_GET['Status']))
{
	$product_details = $_GET['Status'];
	$arr = explode("//", $product_details);
	$product_id=$arr[0];
	$product_price=$arr[1];


	$conn = mysqli_connect('', 'root', '', 'agrofirmit');

			$sql = "UPDATE `farmer_balance` SET  `Debit`=`Debit`+'$product_price',`Credit`=`Credit`-'$product_price',`Balance`=`Balance`-'$product_price' WHERE `phone`= '$phoneNo'";
			$result1 = mysqli_query($conn,$sql);
			header("location:Farmer_dashboard.php?OrderConfirmed");
}
?>