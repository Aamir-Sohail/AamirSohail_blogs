<?php

$con =mysqli_connect('localhost','root','','ali');

if (isset($_POST['action'])) {

	$name =$_POST['name'];
	$email =$_POST['email'];
	$password=$_POST['password'];


$sql ="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";

$result =mysqli_query($con,$sql);
}
?>