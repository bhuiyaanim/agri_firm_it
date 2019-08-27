<?php
	error_reporting(0);
 	$notification_id = $_GET['status'];
 	
 	
 	$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlget_noti_data = " SELECT `notification_data` FROM `agrifarmit_notification` WHERE `notification_id` = '$notification_id'";
			echo "path id: ".$notification_id;
			$result1 = mysqli_query($conn,$sqlget_noti_data);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$datapath=  $row['notification_data'];
				}
			}


			$arr_data = array(); // create empty array
  	 		$jsondata = file_get_contents($datapath);
  	 		 $arr_data = json_decode($jsondata, true);
			  // print_r($arr_data);
			   
			   	$fname = $arr_data[First_Name];
			   	$lname = $arr_data[Last_Name];
			   	$phone=$arr_data[Phone];
				$email=$arr_data[Email];
				$password=$arr_data[Password];
				$nid=$arr_data[NID];
				$gender=$arr_data[Gender];

				mysqli_close($conn);


	
 			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlget_noti_data = " SELECT `notification_data` FROM `agrifarmit_notification` WHERE `notification_id` = '$notification_id'";
			//echo "path id: ".$notification_id;
			$result1 = mysqli_query($conn,$sqlget_noti_data);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$datapath=  $row['notification_data'];
				}
			}


			$arr_data = array(); // create empty array
  	 		$jsondata = file_get_contents($datapath);
  	 		$arr_data = json_decode($jsondata, true);
			  // print_r($arr_data);
			   
			   	$fname = $arr_data[First_Name];
			   	$lname = $arr_data[Last_Name];
			   	$phone=$arr_data[Phone];
				$email=$arr_data[Email];
				$password=$arr_data[Password];
				$nid=$arr_data[NID];
				$gender=$arr_data[Gender];

				mysqli_close($conn);




 			$conn2 = mysqli_connect('', 'root', '', 'agrofirmit');
 		
 		
 		//echo $nid ;
 		$sql = "INSERT INTO `userreg`(`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `gender`, `type`, `NID`) VALUES ('','$fname','$lname','$phone','$email','$password','$gender','AgriIT','$nid')";
						$result = mysqli_query($conn2, $sql);
						
							header("location: Farmer_dashboard.php?registration_confirmed");
			mysqli_close($conn2);
?>