<?php

include "database.php";

$id =$_POST['id'];
$value =$_POST['amphere'];

echo 'amphere';
echo $id;
echo $value;

$query ="INSERT INTO Amphere(amphereId,amphereValue) VALUES ('$id','$value')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>e