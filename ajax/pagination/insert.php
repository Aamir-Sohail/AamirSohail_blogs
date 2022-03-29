<?php 
$con =mysqli_connect('localhost','root','','ali');
$data = 0;
while($data != 50){
    $page = "Page No : ". $data;

    $sql = "INSERT into page (data) value ('$page')";
    echo $sql;
    $result = mysqli_query($con, $sql);
    $data++;
}
?>