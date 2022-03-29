<?php 
include_once('./db/connection.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$sql = "DELETE FROM message WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: message.php?alert=delete");
	}
}

?>