<?php
	error_reporting(0);
	require('db.php');
	
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
			
			
			if($fname =="" || $lname == "" || $phone == "" || $password == "" || $gender == "" || $location == "" || $area == "" || $landtype == "" || $sa == "" || $rs == "" || $mouja == "")
			{
				header("location:reg.php?Null not preferable");
			}
			else{
				if (ctype_alpha($fname)) 
				{
					$fnameflag ="1";
				}

				if (ctype_alpha($lname)) 
				{
					$lnameflag ="1";
				}	


				if( strlen($phone) >= 11)
				{
					$phoneflag = "1";
				}
				
				if (strlen($password > 5)  )
				{
					if(!ctype_alpha($password))
					{
					  $passwordflag="1";
			        }
				}
				
				$genderflag = "1";
				
				if (ctype_alpha($area)) 
				{
					$areaflag ="1";
				}
				
				if (ctype_alpha($landtype)) 
				{
					$landtypeflag ="1";
				}
				
				if( strlen($sa) >= 2)
				{
					$saflag = "1";
				}
				
				if( strlen($rs) >= 2)
				{
					$rsflag = "1";
				}
				
				if (ctype_alpha($mouja)) 
				{
					$moujaflag ="1";
				}

				
				
				
				if($fnameflag =1 && $lnameflag =1 && $phoneflag =1 && $passwordflag =1 && $genderflag =1 &&	$areaflag =1 &&	$landtypeflag =1 &&	$saflag =1 && $rsflag =1 &&	$moujaflag =1)
				{
					

					$conn = mysqli_connect('', 'root', '', 'agrofirmit');

						if(!$conn){
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							
							
							$sql = "INSERT INTO `userreg`(`id`, `firstname`, `lastname`, `phone`, `password`, `gender`, `type`, `location`,`area`, `landtype`, `sa`, `rs`, `mouja`) VALUES ('','$fname','$lname','$phone','$email','$password','$gender','Farmer','$location','$area','$landtype','$sa','$rs','$mouja')";
							$result = mysqli_query($conn, $sql);
							
							echo "DONE";
							//header("location: ../login/Login.php");
						
							mysqli_close($conn);
						
										
						}

					
					
				}
				else
				{
					header("location: registration.php?status=All cretientials are not ok!!");
				}
				
				
			} //else ending
			
	} //isset ending
	
	else
	{
		echo "Invalid request";
	}
	
?>