<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="form.css">
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

<body >
	<!-- from here -->
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
</body>
</html>