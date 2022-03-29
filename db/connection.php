<?php
//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$db="aamirsohail";
//Check Connection
$conn = new mysqli($servername, $username, $password, $db);

if(mysqli_connect_error()){
 die ('Error on the Connection (' . mysqli_connect_errno().')'. mysqli_connect_error() );
}
?>