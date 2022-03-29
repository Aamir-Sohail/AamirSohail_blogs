<?php

$conn = mysqli_connect('localhost','root','','ali');


if (isset($_POST['action'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT into user (email,password) VALUES ('$email','$password')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		
		echo "yes";
	}else{
		echo "not yess";
	}
}
?>