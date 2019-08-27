<?php
	
	$key = $_POST['key'];

	$conn = mysqli_connect('', 'root', '', 'agrofirmit');
	$sql = "SELECT `phone` FROM `farmer_land_activity` WHERE `phone` LIKE = '$key' ";
	$result = mysqli_query($con,$sql);
	
	$data ="";
	
	while($row = mysqli_fetch_assoc($result)){
		$data .="<div onclick='show(this.innerHTML)' style='background-color: #eee;width:200px;border: 1px solid #000;margin:2px'>".$row['username']."</div>";
	}
	echo $data;

?>