<?php 
error_reporting(0);
session_start();
$phoneno=$_SESSION['username'];
$full_name="";
$activity=0;
$admin_check="0";
$add=0;
$equip=0;


$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlprofile = " SELECT * FROM `userreg` WHERE `phone`='$phoneno'";
			$result1 = mysqli_query($conn,$sqlprofile);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$firstname=  $row['firstname'];
				$lastname=  $row['lastname'];
				$full_name= $firstname.$lastname;
				}
			}

			$sqlactivitycheck = " SELECT * FROM `farmer_land_activity`";
			$result2 = mysqli_query($conn,$sqlactivitycheck);
			if (mysqli_num_rows($result2)!=0)
			{
				$activity=mysqli_num_rows($result2);
			}

			$admin_notification = " SELECT * FROM `agrifarmit_notification` ";
			$result3 = mysqli_query($conn,$admin_notification);
			if (mysqli_num_rows($result3)!=0)
			{
				$admin_check=mysqli_num_rows($result3);
			}

			$sqladdcheck = "SELECT * FROM `comapany_product` WHERE `Product_Grade`= 'AAAAA' ";
			$result4 = mysqli_query($conn,$sqladdcheck);
			if (mysqli_num_rows($result4)!=0)
			{
				$add=mysqli_num_rows($result4);
			}

			$sqleqpcheck = "SELECT * FROM `comapany_product` ";
			$result5 = mysqli_query($conn,$sqleqpcheck);
			if (mysqli_num_rows($result5)!=0)
			{
				$equip=mysqli_num_rows($result5);
			}

			$sqactivitycheck = " SELECT * FROM `specialist_report`";
			$result6 = mysqli_query($conn,$sqactivitycheck);
			if (mysqli_num_rows($result6)!=0)
			{
				$SPactivity=mysqli_num_rows($result6);
			}

			$product_notification = " SELECT * FROM `comapany_product`";
			$result8 = mysqli_query($conn,$product_notification);




?>


<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form method="post">
<div id="header">
<div id="layout">
<input type="text" placeholder="Search..." id="header_search"/>
<button id="header_button">WELCOME!ADMIN</button>
<button  type= 'button' id="post_follow_button" onclick="(location.href='Logout.php')"> Logout</button>

</div>
</div>
<div id="layout" style="margin-top:70px;">
<div style="overflow:hidden;padding:0 1px;">
	<div id="dash_menu">
		<span class="dash_arrow"></span> <h2> <button type = 'button' onclick="(location.href='Admin_reg.php')" > Profile </button> </h2> <hr>
		<span><img class="manImg" src="img/user.png"></img></span>

		<center> <h1 class="dash_h green"> <?php echo "$full_name" ?> </h1></center>
	</div>
	
	
	<div id="dash_menu">
		<button type="button" class="w3-btn w3-green" name="land_Activity" onclick="(location.href='landActivity.php?status=land')" >Land Activity  </button>
		<hr>
		<span class="dash_menu refs"></span>
		<center><span class="dash_st_arrow down"></span>
		<h1 class="dash_h red"><?php echo "$activity" ?></h1></center>
	</div>
	
	
	<div id="dash_menu">
		<span class="dash_arrow"></span><h2> 

		<button  type="button" class="w3-btn w3-green" name="addcheck" onclick="(location.href='Advertisement.php?status=ad')" >Advertissements </button> </h2><hr>
		<span class="dash_menu refs"></span>
		<center><span class="dash_st_arrow down"></span>
		<h1 class="dash_h red"><?php echo "$add" ?></h1></center>
		
	</div>
	<div id="dash_menu">

		<span class="dash_arrow" > </span><h2> Agent Notification</h2><hr>
		<span class="dash_menu msg">  </span>
		

		<center> 
			<select id="admin_notifiy" name="admin_notifiy" onchange="window.location.href='AgriITReg_admin.php?status='+this.value">
				<option selected="selected"> <center> <?php echo "$admin_check" ?> </center> </option>

			<?php  while($row = mysqli_fetch_assoc($result3))
				
				{
					$notification_path=  $row['notification_data'];
					$notification_id=  $row['notification_id'];
					$splitdata = explode("/",  $notification_path);
					$splitdata2 = explode("_",  $splitdata[6]);
					$notification_name = $splitdata2[0] ." ". $splitdata2[1];
 				?>
 					<option value= <?php echo "$notification_id" ?>  > <?php echo " $notification_name" ?> </option>
 					
				<?php
				
			} 
				?>  
  			
  			</select>
  		

  	</center>
	</div>
	<div id="dash_menu" style="margin-right:-10px;">
		<span class="dash_arrow"></span><h2>

		<button  type="button" class="w3-btn w3-green" name="eqcheck" onclick="(location.href='Equipment.php?status=eq')" >Equipment</button> </h2><hr>

		<span class="dash_menu con"></span>
		<center><span class="dash_st_arrow up"></span><h1 class="dash_h green"><?php echo "$equip"; ?></h1></center>
	</div>
</div>
</div>
<div id="right_posts">
<div id="post_demi">
<span class="dash_arrow"></span><h2>Land Notification <?php echo "$SPactivity";?>   </h2>

<?php  while($row2 = mysqli_fetch_assoc($result6))
				
				{
					$report_id=  $row2['ID'];
					$report_comment=  $row2['Comment'];
 				?>

<hr>
<img src="img/turn-notifications-on-button.png" id="profile_img_wid">
<h2>Land <?php echo "$report_id" ?> </h2>
<font> <?php echo "$report_comment" ?> </font>
<button type = "button"  id="post_follow_button" onclick="(location.href='Specialist_news.php')" >CHECK</button>
<?php } ?>

<br>
<br>
<br>
<br>

<button type = "button"  id="post_follow_button" onclick="(location.href='insert.php')" >INSERT</button>

<button type = "button"  id="post_follow_button" onclick="(location.href='update.php')" >UPDATE</button>

<button type = "button"  id="post_follow_button" onclick="(location.href='delete.php')" >DELETE</button>
</div>
	
</div>

</body>

</html>