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

?>