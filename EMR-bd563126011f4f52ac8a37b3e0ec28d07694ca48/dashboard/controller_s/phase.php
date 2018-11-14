<?php

include "database.php";	

$id =$_POST['id'];
$value =$_POST['phase'];

echo 'phase';
echo $id;
echo $value;

$query ="INSERT INTO Phase(phaseId,phaseValue) VALUES ('$id','$value')";

$rs=mysqli_query($connect,$query);

if ($rs) {
	echo 'Success';
}else{
	die ('SQL Error: ' . mysqli_error($connect));
}

?>