<!DOCTYPE html>
<html>
<head>
	<title>System Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/leftnav.css">
	<link rel="stylesheet" type="text/css" href="css/topnav.css">

	<link rel="stylesheet" type="text/css" href="css/home.css">

	<?php

	$server='localhost';
	$username='root';
	$password='';
	$database='emr';

	$connect=mysqli_connect($server,$username,$password,$database);

	// if($connect){
	// 	echo 'Success';
	// }else{
	// 	die('Error.');
	// }	

	?>
	
</head>

<body style="margin: 0px;">

<div class="container">	
	<!-- topnav -->
	<!-- .............................................................................................................................................................. -->
	<div class="header" >
		<span class="navleft" style="background-color: #000000;">
			<!-- top right -->
			<img src="icon/emr.png" class="tl_image">
			<span class="tl_text">EMR</span>
		</span>

		<span class="navcenter" style="background-color: #2A2A2A;">
			<!-- top right -->
		</span> 

		<span class="navright" style="background-color: #2A2A2A;">
			<!-- top right -->			
			<img src="icon/myaccount.png" style="width: 30px;height: 30px;margin-top:10px;" class="tl_image">
			<span style="font-size: 15px;margin-top:5px;" class="tl_text">Harin Samaranayake</span>				
		</span> 

		<span class="logout" style="background-color: #2A2A2A">				
			<!-- logout-->						
			<img src="icon/power.png" style="width: 20px;height: 20px;margin-left: 20px;margin-top: 10px;" class="tl_image">
			<span style="font-size: 15px;margin-top:5px;color: #14EA1A;" class="tl_text" >Logout</span>				
		</span>
		<!-- .............................................................................................................................................................. --> 
	</div>

	<div class="body" style="display: block;">

		<span class="left">
			<!-- leftnav -->
			<!-- .............................................................................................................................................................. -->
			<div class="navlist">
				<ul class="nav">
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/home.png" class="image">Home</li></a>					
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/myaccount.png" class="image">My Account</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/super.png" class="image">Super Admin</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/area.png" class="image">Area Admin</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/rates.png" class="image">Rates</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/analytics.png" class="image">Analytics</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/notifications.png" class="image">Notifications</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/settings.png" class="image">Settings</li></a>		
				</ul>					
			</div>
			<!-- .............................................................................................................................................................. -->
		</span>
			
		<span class="right">			
			<div class="window_container" style="padding: 50px 20px;">
				<!-- main content  -->
				<!-- .............................................................................................................................................................. -->
				<div class="topic" style="margin-left: 50px;padding-top: 15px;font-size: 25px;color: #0EB3B3;">
					<span><u>System Updates</u></span>						
				</div>

					<?php

					$phaseCount="select count(phaseId) as count from Phase";
					//$amphereCount="select count(amphereId) as  from Phase";
					//$occupantTypeCount="select count(phaseId) as Id from Phase";
					//$connectionCount="select count(phaseId) as Id from Phase";
					//$areaCount="select count(phaseId) as Id from Phase";

					$rs=mysqli_query($connect,$phaseCount);

					if ($rs) {
						// echo 'Success';

						$row = mysqli_fetch_array($rs);
						$rowcount=$row['count']+1;

						echo ($rowcount);
					}else{
						die ('SQL Error: ' . mysqli_error($connect));
					}

					?>					

					<table  class="form_table ">
						<form method="post" action="controller_s/phase.php">
							<tr class="form_table_row" style="height: 60px;">
								<td class="form_table_row_description" style="width: 200px;">Phase</td>
								<td>id<input type="text" name="id" value="<?php echo $rowcount; ?>" size="2" class="form_table_row_input" readonly></td>
								<td><input type="text" name="phase" placeholder="phase" size="10" class="form_table_row_input"></td>
								<td>
									<button type="submit" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
								</td>
							</tr>
						</form>

						<form method="post" action="controller_s/amphere.php">
							<tr class="form_table_row" style="height: 60px;">
								<td class="form_table_row_description" style="width: 200px;">Amphere</td>
								<td><input type="text" name="id" placeholder="id" size="10" class="form_table_row_input"></td>
								<td><input type="text" name="amphere" placeholder="amphere" size="10" class="form_table_row_input"></td>
								<td>
									<button type="submit" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
								</td>
							</tr>
						</form>

						<form method="post" action="controller_s/occupantType.php">
							<tr class="form_table_row" style="height: 60px;">
								<td class="form_table_row_description" style="width: 200px;">Occupant Type</td>
								<td><input type="text" name="id" placeholder="id" size="10" class="form_table_row_input"></td>
								<td><input type="text" name="occupantType" placeholder="occupant" size="10" class="form_table_row_input"></td>
								<td>
									<button type="submit" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
								</td>
							</tr>
						</form>

						<form method="post" action="controller_s/connection.php">
							<tr class="form_table_row" style="height: 60px;">
								<td class="form_table_row_description" style="width: 200px;">Connection Type</td>
								<td><input type="text" name="id" placeholder="id" size="10" class="form_table_row_input"></td>
								<td><input type="text" name="connection" placeholder="connection" size="10" class="form_table_row_input"></td>
								<td>
									<button type="submit" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
								</td>
							</tr>
						</form>				

						<form method="post" action="controller_s/area.php">
							<tr class="form_table_row" style="height: 60px;">
								<td class="form_table_row_description" style="width: 200px;">Area</td>
								<td><input type="text" name="id" placeholder="id" size="10" class="form_table_row_input"></td>
								<td>
									<select name="province" class="form_table_row_select" style="margin-left: 10px;width: 125px;">
										<option value="" disabled selected hidden>province</option>
										<option value="Western">Western</option>
										<option value="Southern">Southern</option>
										<option value="Nothern">Nothern</option>
									</select>
								</td>
								<td>
									<select name="district" class="form_table_row_select" style="margin-left: 10px;width: 125px;">
										<option value="" disabled selected hidden>district</option>
										<option value="Colombo">Colombo</option>
										<option value="Gampaha">Gampaha</option>
										<option value="Kaluthara">Kaluthara</option>
									</select>
								</td>
								<td><input type="text" name="area" placeholder="area" size="10" class="form_table_row_input"></td>				
								<td>
									<button type="submit" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
								</td>
							</tr>
						</form>
					</table>
											
				<!-- .............................................................................................................................................................. -->
			</div>
		</span>	

	</div>

	<div class="ft" style="background-color: #000000;">
		<!-- footer -->
		Copyrights &copy; 2017 EMR
	</div>

</div>

</body>
</html>
