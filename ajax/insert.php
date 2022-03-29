<?php
$con =mysqli_connect('localhost','root','','ali');
if (isset($_POST['action'])) {
    $email =$_POST['email'];
    $password =$_POST['password'];

    $sql ="INSERT INTO user(email,password) VALUES('$email','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "successful";
    }else{
        echo "unsuccessful";
    }
    
}

?>