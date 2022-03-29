<?php 
session_start();
include_once('./db/connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){

$name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name']));
$email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
$subject = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['subject']));
$msg = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['msg']));

$sql = "INSERT INTO message (name,email,subject,msg) VALUES ('$name','$email','$subject','$msg')";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: index.php#contact");
}
}


?>
