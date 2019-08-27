<?php
	error_reporting(0);
	session_start();
	//require('db.php');
	
	if (isset($_POST['submit']))
	{
		$phoneno = $_SESSION['phone'];
		
		$fertilization=trim($_POST['fertilization']);
		$irrigation=trim($_POST['irrigation']);
		$medicine=trim($_POST['medicine']);
		$watering=trim($_POST['watering']);
		$planting=$_POST['planting'];
		
		
		/* echo"$fertilization";
		echo"<br>";
		echo"$irrigation";
		echo"<br>";
		echo"$medicine";
		echo"<br>";
		echo"$fertilization";
		echo"<br>";
		echo"$watering";
		echo"<br>";
		echo"$planting";
		echo"<br>";
		echo"$phoneno"; */
		
			
		if($fertilization == "" || $irrigation == "" || $medicine == "" || $watering == "" || $planting == "")
		{
			header("location:edit.php?Null not preferable");
		}
		else{
				
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');

			if(!$conn){
				echo "DB Error: ".mysqli_connect_error();
			}
			else{
					
				

				
				$sql = " UPDATE `farmer_land_activity` SET `Fertilization`='$fertilization',`Irrigation`='$irrigation',`Medicine`='$medicine',`Watering`='$watering',`Planting`='$planting' WHERE `phone`='$phoneno' ";
				$result = mysqli_query($conn, $sql);
				if ($result!=""){
				header("location:ChangeLandActivity.php?Update Done");
					
				mysqli_close($conn);
				}
				else
				{
					echo"Not inserted";
				}
						
										
			}
		
		}
			
	} //isset ending
	
	else{
		echo "Invalid request";
	}
	
?>