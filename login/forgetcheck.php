<?php 
if(isset($_POST['forget']))
{

		$forgetusername = $_POST['forgetphone'];
		$forgetpassword = $_POST['forgetpassword'];
		$check="";
		
		//echo"$forgetusername"." "."$forgetpassword";

		if($forgetusername == "" || $forgetusername == ""){

			//echo "invalid submission";
			header("location: forgetPassword.php?status=nullvalue");

		}
		else
		{
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlcheck = " SELECT `password` FROM `userreg` WHERE `phone`= '$forgetusername'";
			$result1 = mysqli_query($conn,$sqlcheck);
			if (mysqli_num_rows($result1)==0)
			
			{
				header("location: forgetPassword.php?status=invalid user!!");
			}
			else
			{
				$check=1;
				
				
			}

		}

			if ($check==1) 
			{
				
				$sql= "UPDATE `userreg` SET `password`='$forgetpassword' WHERE `phone`= '$forgetusername'";
				$result2 = mysqli_query($conn, $sql);
				if ($result2 !="")
				{
				header("location: Login.php");
				}
			}
					
			
		mysqli_close($conn);
				}

				else if(isset($_POST['Login']))
				{
					header("location: Login.php");
				}
				else 
					{echo"Invalid request"; }
?>
