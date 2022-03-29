<?php

$conn = mysqli_connect('localhost','root','','ali');
$sql ="SELECT * FROM user";
$result =mysqli_query($conn,$sql);

$output = '';
if($row = mysqli_num_rows($result)>0){

	$output ='<table border="1" width="100px" cellspacing="0" cellpadding="10px">

<tr>
<th>id</th>
<th>email</th>
<th>password</th>
<th>action</th>
</tr>';

while ($row =mysqli_fetch_assoc($result)) {

	$output.="<tr>
	<td>{$row['id']}</td>
	<td>{$row['email']}</td>
	<td>{$row['password']}</td>
	<td><a href='delete.php?delete_id={$row['id']}' id='load-button' onclick='deletedata();'>Delete Data</a>		
	</td>
	</tr>";

}$output.="</table>";

mysqli_close($conn);
echo "$output";
}else{
	echo "<h4>no record</h4>";
}








?>

the most login person the 