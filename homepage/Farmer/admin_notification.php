<?php
error_reporting(0);
$data = array();
session_start();
//$chek=$_POST['admin_notifiy'];

$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlnotcheck = " SELECT `notification_id`, `notification_data` FROM `agrifarmit_notification` WHERE `notification_id`= '10' ";
			$result1 = mysqli_query($conn,$sqlnotcheck);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
			{
				echo"filelocation"."</br>";
				$notification_path=  $row['notification_data'];
				echo $notification_path;
				echo"</br>";
				echo"</br>";
			}	
			}		

			//$myFile = "http://localhost:85/final_project/homepage/Agri.FirmIT_agent/Anim_Bhuyia_01745871019.json";
  	 		$arr_data = array(); // create empty array
  	 		$jsondata = file_get_contents($notification_path);
		   // converts json data into array
			   $arr_data = json_decode($jsondata, true);
			   print_r($arr_data);
			   echo"</br>";
			   echo $arr_data[First_Name];
			   echo"</br>";
			   echo $arr_data[Last_Name];
			   echo"</br>";
			   echo $arr_data[Phone];
			   echo"</br>";
			  

			   $splitdata = explode("/",  $notification_path);
			   echo $splitdata[6];
			   echo"</br>";
			   print_r($splitdata);
			   echo"</br>";
			  $splitdata2 = explode("_",  $splitdata[6]);
			  
			  $notification_name = $splitdata2[0] ." ". $splitdata2[1];
			  echo $notification_name;
			  echo"</br>"."FROM another pg";
			  echo $_SESSION['notify_id'];			  



			
				
		

?>