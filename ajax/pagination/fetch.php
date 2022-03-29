
<?php

$con =mysqli_connect('localhost','root','','ali');

$sql= "SELECT * FROM user";
$result=mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($result);

?>















<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Upadate </h2>
<table id="form-data">


  <tr>
  	<td>Name</td>
  	<td>Email</td>
  	<td>Password</td>
  	 
     <th colspan="2"  class="text-center dt-no-sorting">Action</th>

  </tr>
  
  	<?php
  	 while ($row =mysqli_fetch_assoc($result)) 
         {
?>

    <tr>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['password'];?></td>

                                     <td><a href="updateajax.php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Edit</a></td>
                                     <td><a href=".php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Delete</a></td>


    
  </tr>



<?php }?>
  </table>




<script>
  $(document).ready(function() {

      $('').on('submit', function(e){
        e.preventDefault();

        var formdata =$('#form-data').serialize()+'&action=insert';

$.ajax({

url:'index1connection.php',
type:'POST',
data:formdata,

success:function(form-data){

  alert('success');
  // $('#form').trigger('reset');

},
error:function(form-data){

  alert('not success');

  console.log(form-data);
}

});
});
    });




</script>



</body>
</html>








