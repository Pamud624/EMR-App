<?php

include "database.php";

$id =$_POST['id'];
$area =$_POST['area'];
$district =$_POST['district'];
$province =$_POST['province'];

echo 'area';
echo $id;
echo $province;
echo $district;
echo $area;

$query ="INSERT INTO Area(areaId,area,district,province) VALUES ('$id','$area','$district','$province')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>