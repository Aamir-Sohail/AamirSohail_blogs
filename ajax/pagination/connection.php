<?php


$con =mysqli_connect('localhost','root','','ali');

$email = $_POST['email'];
$password = $_POST['password'];
// echo $email;

$sql="INSERT into user (email,password) VALUES('$email','$password')";
$result = mysqli_query($con, $sql);
// print_r($sql);
// exit();

if ($result){
	echo '1';

}else{
	echo '0';
}

?>