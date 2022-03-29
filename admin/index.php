<?php 
session_start();
include_once('./db/connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
$email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
$password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
// $salt = ")(*&^%$#(*&^%$#*&^%$#";
// $password_2 = md5($password.$salt);

$sql = "SELECT * FROM users WHERE email='$email' && password='$password'";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);
if($count > 0){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $data['email'];
    header("Location: dashboard.php");
}else{
    echo "Email or Password not Found";
}

}


?>

<!doctype html>
<html lang="en">

<head>
    <title>SizyBabe!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <style>
        .container{
            width: 40%;
            background-color: #ffff;
        }
    </style>
</head>

<body>
    <div class="wrapper mt-5 ">
        <div class="container border mt-5">
            <form method="POST" action="index.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                   </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <center>
                <input type="submit" class="btn btn-primary" value="Submit">
                </center>
            </form>
        </div>
    </div>
</body>

</html>