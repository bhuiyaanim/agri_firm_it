<?php 
error_reporting(0);
$bal=0;
$activity=0;
$admin_check="0";
$add=0;
$equip=0;

session_start();
$phoneno = $_SESSION['username'];


$conn = mysqli_connect('', 'root', '', 'agrofirmit');
			$sqlbalcheck = " SELECT `Balance` FROM `farmer_balance` WHERE `phone`='$phoneno'";
			$result1 = mysqli_query($conn,$sqlbalcheck);
			if (mysqli_num_rows($result1)!=0)
			
			{
				while($row = mysqli_fetch_assoc($result1))
				{
				$bal=  $row['Balance'];
				}
			}

			$land_activity = " SELECT * FROM `farmer_land_activity` WHERE `phone`='$phoneno'";
			$result2 = mysqli_query($conn,$land_activity);
			if (mysqli_num_rows($result2)!=0)
			{
				$activity=mysqli_num_rows($result2);
			}

			$specialist_notification = " SELECT * FROM `specialist_report` WHERE `Owner_ID` ='$phoneno'  ";
			$result3 = mysqli_query($conn,$specialist_notification);

			if (mysqli_num_rows($result3)!=0)
			{
				$specialist_check=mysqli_num_rows($result3);
				setcookie("Specialist_Noti", $specialist_check, time() + (86400 * 30), "/"); // 86400 = 1 day
				$Specialist_Noti_veri = $_COOKIE['Specialist_Noti'];
			}


			$product_notification = " SELECT * FROM `comapany_product`";
			$result4 = mysqli_query($conn,$product_notification);

			
			$sqladdcheck = "SELECT * FROM `comapany_product` WHERE `Product_Grade`= 'AAAAA' ";
			$result5 = mysqli_query($conn,$sqladdcheck);
			if (mysqli_num_rows($result5)!=0)
			{
				$add=mysqli_num_rows($result5);
			}

			$sqleqpcheck = "SELECT * FROM `comapany_product` ";
			$result6 = mysqli_query($conn,$sqleqpcheck);
			if (mysqli_num_rows($result6)!=0)
			{
				$equip=mysqli_num_rows($result6);
			}




?>

<html>
<head>
<title>Agro.FirmIT</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form method="post">
<div id="header">
<div id="layout">
<h1> USER_ID: <?php echo $phoneno; ?>  <br> WELCOME!!  </h1>
<button  type= 'button' id="post_follow_button" onclick="(location.href='Logout.php')"> Logout</button>
</div>
</div>
<div id="layout" style="margin-top:70px;">
<div style="overflow:hidden;padding:0 1px;">
	<div id="dash_menu">
		<span class="dash_arrow"></span><h2>Balance</h2><hr>
		<span class="dash_menu mon"></span>
		<center><span class="dash_st_arrow up"></span><h1 class="dash_h green"> <?php echo "$bal BDT" ?> </h1></center>
	</div>
	
	
	<div id="dash_menu">
		<button type="button" class="w3-btn w3-green" name="land_Activity" onclick="(location.href='land_Activity.php?status=land')" >Land Activity  </button>
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

		<span class="dash_arrow" > </span><h2> Specialist Notification</h2><hr>
		<span class="dash_menu msg">  </span>
		

		<center> 
			<select id="specialist_notify" name="specialist_notify" onchange="window.location.href='Specialist_news.php?status='+this.value">
				<option selected="selected"> <center> <?php echo "$Specialist_Noti_veri" ?> </center> </option>

			<?php  while($row2 = mysqli_fetch_assoc($result3))
				
				{
					$report_id=  $row2['ID'];
					$report_comment=  $row2['Comment'];

 				?>
 					<option value= <?php echo "$report_id" ?> >  <?php echo " $report_comment" ?> </option>
 					
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

<div id="right_posts">
<div id="post_demi">
<span class="dash_arrow"></span><h2> Last Land Notification</h2>
<hr>
<img src="img/turn-notifications-on-button.png" id="profile_img_wid">
<h2>Land 1</h2>
<font>  <?php echo " $report_comment" ?>  </font>
<button id="post_follow_button">Apply</button>
<hr>
</div>
<div id="post_demi">
	<span class="dash_arrow"></span><h2>Expiring Fertilizer Offer</h2>
	<hr>

	<?php  while($row3 = mysqli_fetch_assoc($result4))
				
				{
					$product_name=  $row3['Product_Name'];
					$product_exp=  $row3['Product_ExpairDATE'];
					$product_id = $row3['S.L'];
					$product_price=$row3['Product_price'];
				

 				?>


	<h2> <?php echo "$product_name" ?> </h2>
	<button type="button" id="post_follow_button" onclick="(location.href='f_buyProduct.php?Status=<?php echo $product_id.'//'.$product_price ?>')">BUY NOW 
	</button> 
	<font><?php echo "$product_exp" ?></font> <br>
	<font>PRICE: $<?php echo "$product_price" ?></font>
	<hr>
	<?php } ?>
</div>
</div>

</body>
</html>