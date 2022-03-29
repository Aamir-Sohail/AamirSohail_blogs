<?php

$con=mysqli_connect('localhost','root','','ali');

if (isset($_GET['delete_id'])) {
	$id=$_GET['delete_id'];

	$sql ="DELETE FROM user WHERE id ='$id'";
$result= mysqli_query($con,$sql);

if($result){
	echo "successful";
}else{
	echo "unsuccessful";
}
}






?>




