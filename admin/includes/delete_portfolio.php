<?php 
include_once('./db/connection.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$sql = "DELETE FROM portfolio WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("Location: manage_portfolio.php?alert=delete");
	}
}

?>