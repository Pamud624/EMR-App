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

$account =$_POST['account'];
$nic=$_POST['nic'];
$date=$_POST['date'];
$addressLineOne=$_POST['address_one'];
$addressLineTwo=$_POST['address_two'];
$addressLineThree=$_POST['address_three'];
$log=$_POST['log'];
$lat=$_POST['lat'];
$telephone=$_POST['telephone'];
$occupant=$_POST['occupant'];
$tarrif=$_POST['tarrif'];
$phase=$_POST['phase'];
$amphere=$_POST['amphere'];
$connection=$_POST['connection'];
$admin=$_POST['admin'];
$area=$_POST['area'];

$query ="INSERT INTO Customer(accountId,applicationRecievedDate,tarrif) VALUES ('$nic','$fname','$mname','$lname','$gender','$addressLineOne','$addressLineTwo','$addressLineThree','$telephone','$mobile','$email','$username','$password')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>