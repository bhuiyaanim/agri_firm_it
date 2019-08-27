<?php
	error_reporting(0);
	
	if (isset($_POST['submit']))
	{
	
			$farmerid=trim($_POST['farmarID']);
			$specialistid=trim($_POST['sID']);
			$report=trim($_POST['report']);
			$comment=trim($_POST['comment']);
			
					
			if($farmerid =="" ||$specialistid == "" || $report == "" || $comment == "")
			{
				header("location:S_Specialist_Report_Add.php?Null not preferable");
			}
			else
			
			{		$conn = mysqli_connect('', 'root', '', 'agrofirmit');

						if(!$conn){
							echo "DB Error: ".mysqli_connect_error();
						}
						else
						{
							
							
							$sql = "INSERT INTO `specialist_report`(`ID`, `Owner_ID`, `Specialist_ID`, `Specialist_Report`, `Comment`) VALUES ('','$farmerid','$specialistid','$report','$comment')";
							$result = mysqli_query($conn, $sql);
							
							mysqli_close($conn);
							header("location: S_Specialist_Report.php");
									
						}

					
					
				}
				
				
			} //else ending
	
	else
	{
		echo "Invalid request";
	}
	
?>