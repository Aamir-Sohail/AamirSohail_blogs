<?php 
session_start();
include_once('./db/connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){


$id = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['id']));
$title = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['title']));
$tag = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['tag']));
$desp = htmlspecialchars($_POST['desp']);


$sql = "UPDATE blogs SET tag = '$tag', title= '$title', desp = '$desp' WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: manage_blog.php?alert=sucess");
}
}
?>
