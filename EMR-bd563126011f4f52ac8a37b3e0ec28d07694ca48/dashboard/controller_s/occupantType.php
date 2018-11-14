<?php

include "database.php";

$id =$_POST['id'];
$value =$_POST['occupantType'];

echo 'occupantType';
echo $id;
echo $value;

$query ="INSERT INTO OccupantType(occupantTypeId,occupantType) VALUES ('$id','$value')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>