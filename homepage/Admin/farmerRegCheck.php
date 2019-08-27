<?php
	error_reporting(0);
	
	if (isset($_POST['submit']))
	{
	
			$fname=trim($_POST['fname']);
			$lname=trim($_POST['lname']);
			$phone=trim($_POST['phone']);
			$password=trim($_POST['password']);
			$gender=$_POST['gender'];
			$location=trim($_POST['location']);
			$area=trim($_POST['area']);
			$landtype=trim($_POST['landtype']);
			$sa=trim($_POST['sa']);
			$rs=trim($_POST['rs']);
			$mouja=trim($_POST['mouja']);
			$nid= trim($_POST['nid']);
			
			$fnameflag ="";
			$lnameflag ="";
			$phoneflag ="";
			$passwordflag ="";
			$genderflag ="";
			$locationflag ="";
			$areaflag ="";
			$landtypeflag ="";
			$saflag ="";
			$rsflag ="";
			$moujaflag ="";
			$nidflag ="";
			
			echo "<br>";
			echo "firstname". $fname;
			echo "<br>";
			echo "lastname".$fname;
			echo "<br>";
			echo "phone ".$phone;
			echo "<br>";
			echo "password ".$password;
			echo "<br>";
			echo "gender ".$gender;
			echo "<br>";
			echo "location ".$location;
			echo "<br>";
			echo "area".$area;
			echo "<br>";
			echo "land type ".$landtype;
			echo "<br>";
			echo "sa ".$sa;
			echo "<br>";
			echo "rs ".$rs;
			echo "<br>";
			echo "mouja ".$mouja;
			echo "<br>";

					$conn1 = mysqli_connect('', 'root', '', 'agrofirmit');

						if(!$conn1){
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							
						$reg_sql="INSERT INTO `userreg`(`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `gender`, `type`, `NID` ) VALUES ('','$fname','$lname','$phone','','$password','$gender','Farmer', '$nid')";
						
						$result1 = mysqli_query($conn1, $reg_sql);

						mysqli_close($conn1);

						$conn2 = mysqli_connect('', 'root', '', 'agrofirmit');


							$land_info = "INSERT INTO `farmer_land_info`(`S.L`, `Phone`, `Location`, `Area`, `Land Type`, `SA DAG`, `RS DAG`, `Mouja`) VALUES ('','$phone','$location','$area','$landtype','$sa','$rs','mouja')";
							$result2 = mysqli_query($conn2, $land_info);
							mysqli_close($conn2);
							header("location: agrifirmIT_Dashboard.php");
						
							
							
							
				
			} //else ending
			
	} //isset ending
	
	else
	{
		echo "Invalid request";
	}
	
?>