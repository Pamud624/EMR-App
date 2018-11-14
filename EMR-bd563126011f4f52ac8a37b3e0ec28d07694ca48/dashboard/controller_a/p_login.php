<?php

$server='localhost';
$username='root';
$password='';
$database='emr';

$connect=mysqli_connect($server,$username,$password,$database);

if($connect){
	echo 'Success';
}else{
	die('Error.');
}	

$nic =$_POST['nic'];
$password=$_POST['password'];
$recapcha=$_POST['recapcha'];

$query="select * from customer where customerNIC='$nic' and password='$password'";

$rs=mysqli_query($connect,$query);

$row = mysqli_fetch_array($rs);

if ($row) {
	$name = $row[1]." ".$row[2]." ".$row[3];
	echo $name;	
}else{
	echo 'Invalid NIC or Password';
}

?>