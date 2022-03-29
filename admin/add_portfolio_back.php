<?php 
session_start();
include_once('./db/connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){

$title = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['title']));
$tag = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['tag']));
if(isset($_FILES['img'])){
    $img_name = $_FILES['img']['name'];
    $img_size =$_FILES['img']['size'];
    $img_tmp =$_FILES['img']['tmp_name'];
    $img_type=$_FILES['img']['type'];

    $tmp = explode('.',$_FILES['img']['name']);
    $img_ext=strtolower(end($tmp));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($img_ext,$extensions)=== false){
       header("Location: add_portfolio.php?alert=invalid_type");
    }
    
    if($img_size > 5 * 1024 * 1024){
        header("Location: add_portfolio.php?alert=Too_Big_img");
    }
    
    if(empty($errors)==true){
      $img = "../uploads/".uniqid("img_").".".$img_ext;
      move_uploaded_file($img_tmp,$img);
       
    }
 }

$sql = "INSERT INTO portfolio (title,tag,img) VALUES ('$title','$tag','$img')";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: add_portfolio.php?alert=sucess");
}
}


?>
