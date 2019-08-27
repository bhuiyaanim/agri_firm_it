<?php
	
	session_start();
	
	if(isset($_POST['Login'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if($username == "" || $password == ""){

			//echo "invalid submission";
			header("location: Login.php?status=nullvalue");

		}else{

			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$isvalid = "";
			
			
			$sqlcheck = " SELECT * FROM `userreg` WHERE `phone` = '$username' and `Password` = '$password'";
			$result1 = mysqli_query($conn,$sqlcheck);
			if (mysqli_num_rows($result1)==0)
			
			{
				header("location: Login.php?status=invalid user!!");
			}
			else
			{
				$isvalid = "validuser";
				while($row = mysqli_fetch_assoc($result1))
					{
		
					$_SESSION['username'] =  $row['phone'];
					$_SESSION['type'] =  $row['type'];
					$id = $row['id'];	
					}
			}
			}
			
			if ($isvalid == "validuser")
			{
				//echo "valid";
					if($_POST['rm']== "rm")
					{
						//echo "remember me";
						if (($_SESSION['type'])=="Farmer")
							{
								setcookie("Farmer", "Farmer", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: ../homepage/Farmer/Farmer_dashboard.php");
							}
							
						else if (($_SESSION['type'])=="Admin")
							{
								setcookie("Admin", "Admin", time() + (86400 * 30), "/"); // 86400 = 1 day
								setcookie("id", $id, time() + (86400 * 30), "/");
								header("location: ../homepage/Admin/AdminDashboard.php");
							}
								
						else if (($_SESSION['type'])=="CompanyRepresentative")
							{
								setcookie("CompanyRepresentative", "CompanyRepresentative", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: ../homepage/CompanyAgent/Companis_dashboard.php");
							}
							
						else if (($_SESSION['type'])=="AgriFirmIT")
							{
								setcookie("AgriFirmIT", "AgriFirmIT", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: ../homepage/Agri.FirmIT_agent/agrifirmIT_Dashboard.php");
							}

						else if (($_SESSION['type'])=="AgriSpecialist")
							{
								setcookie("AgriSpecialist", "AgriSpecialist", time() + (86400 * 30), "/"); // 86400 = 1 day
								header("location: ../homepage/AgriSpecialist/Agri_specialist_dashboard.php ");
							}
					}
					else
					{
						if (($_SESSION['type']) == "Admin")
						{
							header("location: ../homepage/Admin/AdminDashboard.php");
						}
						else if (($_SESSION['type']) == "AgriFirmIT")
						{
							header("location: ../homepage/Agri.FirmIT_agent/agrifirmIT_Dashboard.php");
						}
						else if (($_SESSION['type']) == "Farmer")
						{
							header("location: ../homepage/Farmer/Farmer_dashboard.php");
						}
						else if (($_SESSION['type']) == "CompanyRepresentative")
						{
							header("location: ../homepage/CompanyAgent/Companis_dashboard.php");
						}
						else if (($_SESSION['type']) == "AgriSpecialist")
						{
							header("location: ../homepage/AgriSpecialist/Agri_specialist_dashboard.php ");
						}
						
					}
						
			}

			mysqli_close($conn);

		}
		else if(isset($_POST['forget']))
		{
			header("location: forgetPassword.php");
		}

		else 
		{
			header("location: Login.php?status=invalid Request");
		}
?>