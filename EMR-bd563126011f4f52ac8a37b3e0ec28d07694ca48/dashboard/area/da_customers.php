<!DOCTYPE html>
<html>
<head>
	<title>Area Administrator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="css/frame.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/leftnav.css">
	<link rel="stylesheet" type="text/css" href="css/topnav.css">

	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 80%;
		    margin-left: 50px;
		    margin-top: 20px;
		    border: 1px solid #CAEAFF;		    
		}

		th {
		    border: 1px solid #CAEAFF;
		    text-align: left;
		    padding: 8px;
		    background-color: #3498DB;
		    color: #ffffff;
		}

		td {
		    border: 1px solid #CAEAFF;
		    text-align: left;
		    padding: 2px;		    
		}

		tr:nth-child(even){
			background-color: #EDF7FD;
		}		

		tr:hover{
			background-color: #A7E9F9;
		}
	</style>
</head>

<body style="margin: 0px;">

<div class="container">	
	<!-- topnav -->
	<div class="header" >
		<span class="navleft">
			<!-- top right -->
			<img src="icon/emr.png" class="tl_image">
			<span class="tl_text">EMR</span>
		</span>

		<span class="navcenter">
			<!-- top right -->
		</span> 

		<span class="navright">
			<!-- top right -->			
			<img src="icon/myaccount.png" style="width: 30px;height: 30px;margin-top:10px;" class="tl_image">
			<span style="font-size: 15px;margin-top:5px;" class="tl_text">Harin Samaranayake</span>				
		</span> 

		<span class="logout">				
			<!-- logout-->						
			<img src="icon/power.png" style="width: 20px;height: 20px;margin-left: 20px;margin-top: 10px;" class="tl_image">
			<span style="font-size: 15px;margin-top:5px;color: #14EA1A;" class="tl_text" >Logout</span>				
		</span> 
	</div>

	<div class="body" style="display: block;">

		<span class="left">
			<!-- leftnav -->
			<div class="navlist">
				<ul class="nav">
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/home.png" class="image">Home</li></a>					
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/myaccount.png" class="image">My Account</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/customer.png" class="image">Customer</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/reader.png" class="image">Reader</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/readings.png" class="image">Readings</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/map.png" class="image">Map</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/analytics.png" class="image">Analytics</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/notifications.png" class="image">Notifications</li></a>
					<a href="d_home.html" target="_self" style="text-decoration: none;"> <li class="nav"> <img src="icon/settings.png" class="image">Settings</li></a>		
				</ul>
			</div>
		</span>
			
		<span class="right">
			<div class="window_container">
			<!-- main content -->
				<div class="window_container" style="background-color: #ffffff">
					<div class="header" style="padding: 20px 50px;">
						<span><u>Customers</u></span>						
					</div>

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

						$query='select * from Customer';

						$rs=mysqli_query($connect,$query);		

					?>

					<form method="post" action="customer.php">
						<table>
							<tr>
								<th></th>
								<th>NIC</th>
								<th class="form_table_row_description">Name</th>
								<th class="form_table_row_description">Gender</td>
								<th class="form_table_row_description">Address</th>
								<th class="form_table_row_description">Telephone</th>
								<th class="form_table_row_description">Mobile</th>
								<th class="form_table_row_description">Email</th>					
							</tr>

							<?php

							// if ($rs) {
							// 	echo 'Success';
							// }else{
							// 	die ('SQL Error: ' . mysqli_error($conn));
							// }

							while ($row = mysqli_fetch_array($rs)){					
								echo '<tr>
										<td><input type="checkbox"  style="margin-left:5px;"></td>						
										<td class="form_table_row_description">'.$row[0].'</td>
										<td class="form_table_row_description">'.$row[1].' '.$row[2].' '.$row[3].'</td>
										<td class="form_table_row_description">'.$row[4].'</td>
										<td class="form_table_row_description">'.$row[5].' '.$row[6].' '.$row[7].'</td>	
										<td class="form_table_row_description">'.$row[8].'</td>
										<td class="form_table_row_description">'.$row[9].'</td>	
										<td class="form_table_row_description">'.$row[10].'</td>											
									</tr>';
							}

							?>										
						</table>
					</form>
				</div>
			</div>		
		</span>	

	</div>

	<div class="ft">
		<!-- footer -->
		Copyrights &copy; 2017 EMR
	</div>

</div>

</body>
</html>
