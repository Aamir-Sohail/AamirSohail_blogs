<?php 
include_once('./db/connection.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$sql = "DELETE FROM blogs WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: manage_blog.php?alert=delete");
	}
}

?>