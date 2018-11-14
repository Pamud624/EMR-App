<?php

include "database.php";

$id =$_POST['id'];
$value =$_POST['connection'];

echo 'connection';
echo $id;
echo $value;

$query ="INSERT INTO Connection(connectionId,connectionType) VALUES ('$id','$value')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>