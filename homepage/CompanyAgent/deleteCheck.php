
<?php
	if(isset($_POST['delete'])){
		
		$num = trim($_POST['phnumber']);
		
	
			$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			if(!$conn)
			{
						echo "DB Error: ".mysqli_connect_error();
			}
			else
			{
				$sql = "DELETE FROM `comapany_product` WHERE `S.L`= '$num' ";
				$result = mysqli_query($conn, $sql);
				mysqli_close($conn);
				header("location: Equipment.php");
				
			}
		
		
	}