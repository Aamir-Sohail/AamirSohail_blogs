<?php 
session_start();
include_once('./db/connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
$id = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['id']));
$title = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['title']));
$tag = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['tag']));
$sql = "UPDATE portfolio SET tag = '$tag', title= '$title' WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: manage_portfolio.php?alert=sucess");
}
}
?>
