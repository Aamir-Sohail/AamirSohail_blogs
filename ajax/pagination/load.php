<?php 
$con =mysqli_connect('localhost','root','','ali');

if(isset($_GET['load'])){
    $load = $_GET['load'];
    $no_of_data = 5; 
    
    $count = "SELECT COUNT(*) as count FROM page";
    $count_result = mysqli_query($con, $count);
    $total = mysqli_num_rows($count_result);
    

    // $offset = ceil($total/$no_of_data);

    $offset = ($load-1) * $no_of_data; 

    $sql = "SELECT * from page limit $offset,$no_of_data";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr><td>'.$row['data'].'</td></tr>';
        // echo "<br>";
    }
}
?>