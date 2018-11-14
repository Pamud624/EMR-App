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
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$addressLineOne=$_POST['address_one'];
$addressLineTwo=$_POST['address_two'];
$addressLineThree=$_POST['address_three'];
$telephone=$_POST['telephone'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$query ="INSERT INTO Customer(customerNIC,firstName,middleName,lastName,gender,addressLineOne,addressLineTwo,addressLineThree,telephone,mobile,email,username,password) VALUES ('$nic','$fname','$mname','$lname','$gender','$addressLineOne','$addressLineTwo','$addressLineThree','$telephone','$mobile','$email','$username','$password')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>