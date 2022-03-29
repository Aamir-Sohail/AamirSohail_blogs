<?php

$con =mysqli_connect('localhost','root','','ali');

$id =$_GET['id'];

$sql = "SELECT * FROM user WHERE id = '$id' ";
$result =mysqli_query($con,$sql);

$row =mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){

$email =$_POST['email'];
$password =$_POST['password'];


$sql ="UPDATE user set email ='$email' and password = '$password' WHERE id = '$id'";

$result =mysqli_query($con,$sql);

if ($result) {
  echo "successful";
}else{
  echo "unsuccessful";
}

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>file</title>
</head>
<body>
  <form>
    <div>
     <input type="email" name="email" class="form-control" id="email" placeholder="email" value="<?php echo $row['email']?>">
        
       </div> 

       <div>
     <input type="password" name="password" class="form-control" id="password" placeholder="pas" value="<?php echo $row['password']?>">
        
       </div> 
        </form>                                

</body>
</html>
